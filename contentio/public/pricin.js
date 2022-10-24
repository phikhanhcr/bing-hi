var initHeight = 0;
var package_id = undefined;
var productId = undefined;
var token = undefined;
var email = undefined;
var accountId = undefined;
var trackingUrl = undefined;
$(document).ready(function () {
    token = $.getUrlVar("token");
    email = $.getUrlVar("email");
    if(!token || !email){
        sendEventToParent('401', {});
        return;
    }
    gateway = $.getUrlVar("gateway");
    package_id = $.getUrlVar("package_id");
    productId = $.getUrlVar("productId");
    accountId = $.getUrlVar("acc");
    trackingUrl = 'https://'+$.getUrlVar("callback");
    $(`[data-btn-show]`).hide();
    $(`[data-btn-show="${gateway}"]`).css('display', 'flex');

    loadPaypal();
    setTimeout(function () {
        changeHeight();
    }, 1000);
});

function loadPaypal() {
    var ppclientid = $.getUrlVar("ppclientid");
    if (ppclientid) {
        loadAsync(
            "https://www.paypal.com/sdk/js?client-id=" +
                ppclientid +
                "&vault=true&disable-funding=credit",
            function () {
                paypal.Buttons({
                    createSubscription: function(data, actions) {
                        var passData = {
                            plan_id: productId,
                            subscriber: {
                                name: {
                                    given_name: token,
                                    surname: email
                                },
                                email_address: email
                            }
                        };
    
                        return actions.subscription.create(passData);
                    },
                    onApprove: function(data, actions) {
                        var dataPush = {
                            checkoutCode: data.subscriptionID,
                            packageId: package_id,
                            paymentType: data.paymentSource,
                            token: token,
                            productId: productId,
                            accountId:accountId
                        };
                        sendEventToParent('payment-success', dataPush)
                    },
                    onError: function(err) {
                        console.log('onError', err);
                    },
                    onClick: function(data) {
                        console.log('onClick', data);
                        changeHeight();
                    },
    
                    onCancel: function(data) {
                        console.log('onCancel', data);
                        changeHeight();
                    },
                    onInit: function(data, actions)  {
                        changeHeight();
                    },
                }).render('#paypal-button-container');
            }
        );
    }
}

function changeHeight() {
    if (initHeight != document.querySelector('.container-btn-payment').scrollHeight) {
        initHeight = document.querySelector('.container-btn-payment').scrollHeight;
        sendEventToParent('change-height', {
            height: initHeight
        });
    }
}

function loadAsync(url, callback) {
    var s = document.createElement("script");
    s.setAttribute("src", url);
    s.onload = callback;
    document.head.insertBefore(s, document.head.firstElementChild);
}

function sendEventToParent(event, data) {
    parent.postMessage(
        JSON.stringify({
            event,
            data,
        }),
        "*"
    );
}
addEventListener("message", function (event) {
    try {
        const dataParse = JSON.parse(event.data);
        if (dataParse.event == 'click-item-package') {
            onClickItemPackage(dataParse.data);
        }
        if (dataParse.event == 'click-item-payment') {
            $(`[data-btn-show]`).hide();
            $(`[data-btn-show="${dataParse.data.type}"]`).css('display', 'flex');
        }
    } catch (e) {
        console.log(e);
    }
}, false);

function onClickItemPackage(data) {
    package_id = data.package_id;
    productId = data.productId;
}

$.extend({
    getUrlVars: function () {
        var vars = [],
            hash;
        var hashes = window.location.href
            .slice(window.location.href.indexOf("?") + 1)
            .split("&");
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split("=");
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    },
    getUrlVar: function (name) {
        return $.getUrlVars()[name];
    },
});