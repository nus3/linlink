<?php
namespace App\Services;

use LinkModel;

class Link
{
    public function getPopularLinks($num = 5)
    {
        // TODO: 例外処理
        $links = LinkModel::withCount('accesses')
            ->orderBy('accesses_count', 'desc')
            ->limit($num)
            ->get();

        return $links;
    }

}