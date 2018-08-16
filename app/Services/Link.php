<?php
namespace App\Services;

use Scraper;

use LinkModel;

use TagService;
use UrlManipulator;

class Link
{
    public function getPopularLinks($num = 15)
    {
        // TODO: 例外処理
        $links = LinkModel::withCount('accesses')
            ->orderBy('accesses_count', 'desc')
            ->limit($num)
            ->get();

        return $links;
    }

    public function getRecentlyLinks($num = 5)
    {
        // TODO: 例外処理
        $links = LinkModel::orderBy('created_at', 'desc')->limit($num)->get();
        return $links;
    }

    public function getLinks()
    {
        $popularLinks  = $this->getPopularLinks();
        $recentlyLinks = $this->getRecentlyLinks();

        return [
            'popularLinks' => $popularLinks,
            'recentlyLinks' => $recentlyLinks
        ];
    }

    public function save($params)
    {
        $ogpUrl = Scraper::getOgpUrl($params['inputUrl']);
        if (is_null($ogpUrl)) {
            $ogpUrl = public_path('img/no_image.png');
        }
        else {
            $ogpUrl = UrlManipulator::convertRelativeToAbsolute($params['inputUrl'], $ogpUrl);



        }

        // // TODO: バリデーション
        // $attributes = [
        //     'url' => $params['inputUrl'],
        //     'ogp_url' => $ogpUrl,
        //     'description' => $params['inputDescription'],
        //     'name' => $params['inputName'],
        //     'title' => $params['inputTitle'],
        // ];

        // // TODO: 例外処理
        // $link = LinkModel::create($attributes);

        // $tagNames = explode(',' , $params['inputTags']);
        // $tagIds = TagService::save($tagNames);
        // $link->tags()->sync($tagIds);

        // return $link;
    }
}