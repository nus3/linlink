<?php

namespace App\Http\Components;

use Symfony\Component\DomCrawler\Crawler;

class Scraper
{
    public function __construct()
    {
    }

    /**
     * URLからOGPのurlを取得して返す
     *
     * @param  String  $url
     * @return String  $ogpUrl
     */
    public function getOgpUrl($url)
    {
        $ogpUrl = null;

        $contents = file_get_contents($url);
        if (!$contents) {
            return $ogpUrl;
        }

        $contentsCrawler = new Crawler($contents);
        $ogpElement = $contentsCrawler->filter('meta[property="og:image"]');

        if ($ogpElement->count()) {
            $ogpUrl = $ogpElement->attr('content');
        }

        return $ogpUrl;
    }
}