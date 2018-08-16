<?php
namespace App\Services\Helpers;

class UrlManipulator
{
    public function __construct()
    {
    }

    /**
     * 相対パスのurlを絶対パスへ変換する    
     *
     * @param  String  $baseUrl アクセスしているurl
     * @param  String  $relativeUrl 相対パス
     * @return String  $absoluteUrl 絶対パス
     */
    public function convertRelativeToAbsolute($baseUrl, $relativeUrl)
    {
        $baseParse = parse_url($baseUrl);
        $relativeParse = parse_url($relativeUrl);

        logger(print_r($baseParse, true));
        logger(print_r($relativeParse, true));

    }
}