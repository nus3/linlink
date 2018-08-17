<?php
namespace App\Services;

use TagModel;

class Tag
{
    public function getPopularTags($num = 40)
    {
        $tags = TagModel::withCount('links')
            ->orderBy('links_count', 'desc')
            ->limit($num)
            ->get();

        return $tags;
    }

    public function save($tagNames)
    {
        foreach ($tagNames as $tagName) {
            $tag = TagModel::where('name', $tagName)->first();
            if (is_null($tag)) {
                // TODO: 例外処理
                $tag = TagModel::create(['name' => $tagName]);
            }

            $tagIds[] = $tag->id;
        }

        return $tagIds;
    }
}
