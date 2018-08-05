<?php
namespace App\Services;

use LinkModel;

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
        $attributes = [
            'url' => $params['inputUrl'],
            // 'ogp_url' => $params['ogpUrl'],
            'description' => $params['inputDescription'],
            'name' => $params['inputName'],
            'title' => $params['inputTitle'],
        ];

        $link = LinkModel::create($attributes);

        // TODO: タグの登録

        return $link;
    }
}