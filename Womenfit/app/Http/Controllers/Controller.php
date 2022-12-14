<?php

namespace App\Http\Controllers;

use App\Models\PageSeo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getSeoData($data = []) {
        $seo = [
            'title' => ucwords(config('app.SITE_NAME')),
            'description' => '',
            'keywords' => '',
            'image' => 'https://' . config('app.SITE_NAME') . '/img/thumbnail.png',
            'image_width' => 600,
            'image_height' => 315,
            'canonical' => url()->current(),
            'content' => '',
            'robots' => 'NOINDEX,NOFOLLOW',
            'schema' => '',
            'h1' => ''
        ];
        $GLOBALS['routeName'] = request()->route()->getName();

        switch ($GLOBALS['routeName']) {
            case 'getIndex':
                $seo['title'] = 'womenfit.net | helps you live in sync with your cycle.';
                break;
            default:
                $seo['title'] = 'A platform built for helping you live in sync with your cycle.';
                break;
        }

        if (!empty($_SERVER["REQUEST_URI"])) {
            $uri = strtok($_SERVER["REQUEST_URI"],'?');
            $allData = PageSeo::allData(config('app.SITE_NAME'), $uri);
            foreach ($allData as $pageSeo) {
                if ($pageSeo['uri'] == $uri) {
                    if (!empty($pageSeo['title'])) {
                        $seo['title'] = $pageSeo['title'];
                    }
                    if (!empty($pageSeo['description'])) {
                        $seo['description'] = $pageSeo['description'];
                    }
                    if (!empty($pageSeo['canonical'])) {
                        $seo['canonical'] = $pageSeo['canonical'];
                    }
                    if (!empty($pageSeo['content'])) {
                        $seo['content'] = $pageSeo['content'];
                    }
                    if (!empty($pageSeo['seo_schema'])) {
                        $seo['schema'] = $pageSeo['seo_schema'];
                    }
                    if (!empty($pageSeo['keywords'])) {
                        $seo['keywords'] = $pageSeo['keywords'];
                    }
                    if (!empty($pageSeo['h1'])) {
                        $seo['h1'] = $pageSeo['h1'];
                    }
                    if (!empty($pageSeo['og_image'])) {
                        $seo['image'] = $pageSeo['og_image'];
                    }
                }
            }
        }

        $GLOBALS['seo'] = $seo;
        View::share('seo', $seo);
    }
}
