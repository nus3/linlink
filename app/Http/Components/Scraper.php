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
        $contents = file_get_contents($url);
        $contentsCrawler = new Crawler($contents);

        // TODO: 相対パスの対応　og:imageがなかった場合の対応
        $ogpUrl = $contentsCrawler->filter('meta[property="og:image"]')->attr('content');

        return $ogpUrl;
    }
}