<?php
namespace App\Services;

use TagModel;

class Tag
{
    public function getPopularTags($num = 20)
    {
        
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
