<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;

use Illuminate\Http\Request;

use LinkService;
use TagService;

class LinkController extends Controller
{
    public function index()
    {
        $links = LinkService::getLinks();
        return view('link.index', $links);
    }

    public function create(Request $request)
    {
        $link = LinkService::save($request);
        return response()->json(['message' => 'succes']);
    }

    // NOTE: 検索画面→search 検索処理→find
    public function search()
    {
        $tags = TagService::getPopularTags();
        return view('link.search', ['tags' => $tags]);
    }

    public function links()
    {
        $links = LinkService::getRecentlyLinks();
        return view('link.links', ['links' => $links]);
    }
}
