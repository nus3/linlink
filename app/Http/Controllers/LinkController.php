<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;

use Illuminate\Http\Request;

use LinkService;

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
        // TODO: json渡してmodalで登録成功メッセージ表示する
        return response()->json(['message' => 'succes']);
    }

    // NOTE: 検索画面→search 検索処理→find
    public function search()
    {
        return view('link.search');
    }

    public function links()
    {
        return view('link.links');
    }
}
