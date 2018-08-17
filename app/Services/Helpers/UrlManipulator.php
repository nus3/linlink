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
                
        $absoluteUrl = '';
        if (isset($relativeParse['host'])) {
            $absolutePath = "{$relativeParse['scheme']}://{$relativeParse['host']}{$relativeParse['path']}";
            $absoluteQuery = isset($relativeParse['query']) ? "?{$relativeParse['query']}" : '';
            $absoluteUrl = $absolutePath. $absoluteQuery;
        }
        elseif (isset($relativeParse['path'])) {

            $pathInitialTwo = substr($relativeParse['path'], 0, 2);
            $pathInitialOne = substr($relativeParse['path'], 0, 1);
            if (in_array($pathInitialTwo, ['./', '..'])) {
                $pathArray = explode('/', $relativeParse['path']);

                $basePath = isset($baseParse['path']) ? $baseParse['path'] : '';
                if (pathinfo($basePath, PATHINFO_EXTENSION)) {
                    $basePath = pathinfo($basePath, PATHINFO_DIRNAME);
                }

                foreach ($pathArray as $path) {
                    if ($path == '..') {
                        $basePath = dirname($basePath);
                    }
                    if (in_array($basePath, ['/', '\\'])) {
                        $basePath = '';
					    break;
                    }
                }

                $relativeUrl = str_replace(['../','./'], '', $relativeUrl);

                $absoluteUrl = "{$baseParse['scheme']}://{$baseParse['host']}{$basePath}/{$relativeUrl}";
            }
            elseif ($pathInitialOne == '/') {
                $absoluteUrl = $baseParse['scheme'] . '://' . $baseParse['host'] . $relativeUrl;
            }
            else {
                $basePath = isset($baseParse['path']) ? $baseParse['path'] : '';

                if (pathinfo($basePath, PATHINFO_EXTENSION)) {
                    $basePath = pathinfo($basePath, PATHINFO_DIRNAME);
                }
                $absolutePath = $baseParse['host'] . '/' . $basePath . '/' . $relativeUrl;
                $absoluteUrl = $baseParse['scheme'] . '://' . str_replace('//', '/', $absolutePath);
            }
        }

        return $absoluteUrl;
    }
}