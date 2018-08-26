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

    public function getRecentlyLinks()
    {
        // TODO: 例外処理
        $links = LinkModel::withCount('accesses')->orderBy('created_at', 'desc')->paginate(12);
        return $links;
    }

    public function save($params)
    {
        $ogpUrl = Scraper::getOgpUrl($params['inputUrl']);
        if (is_null($ogpUrl)) {
            $ogpUrl = url('img/no_image.png');
        }
        else {
            $ogpUrl = UrlManipulator::convertRelativeToAbsolute($params['inputUrl'], $ogpUrl);
        }

        // TODO: バリデーション
        $attributes = [
            'url' => $params['inputUrl'],
            'ogp_url' => $ogpUrl,
            'description' => $params['inputDescription'],
            'name' => $params['inputName'],
            'title' => $params['inputTitle'],
        ];

        // TODO: 例外処理
        $link = LinkModel::create($attributes);

        $tagNames = explode(',' , $params['inputTags']);
        $tagIds = TagService::save($tagNames);
        $link->tags()->sync($tagIds);

        return $link;
    }

    public function getLinksFromTagArray($tagNames)
    {
        $tagNameArray = explode(',', $tagNames);
        $links = LinkModel::whereHas('tags', function ($query) use ($tagNameArray){
            $query->whereIn('name', $tagNameArray);
        })->withCount('accesses')->orderBy('accesses_count', 'desc')->paginate(12);

        return $links;
    }

    public function createAccessRelatedLink($sessionId, $linkId)
    {
        $link = LinkModel::where('id', $linkId)->first();
        $isAccessExists = $link->accesses()->where('session_id', $sessionId)->exists();

        if (!$isAccessExists) {
            $link->accesses()->create([
                'session_id' => $sessionId
            ]);
            return 'create';
        }

        return 'exists';
    }
}