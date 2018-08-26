<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use LinkService;
use TagService;

class LinkController extends Controller
{
    public function index()
    {
        $links = LinkService::getPopularLinks();
        return view('link.index', ['popularLinks' => $links]);
    }

    public function create(Request $request)
    {
        $link = LinkService::save($request);
        return response()->json(['message' => 'success']);
    }

    public function search()
    {
        $tags = TagService::getPopularTags();
        return view('link.search', ['tags' => $tags]);
    }

    public function find(Request $request)
    {
        $links = LinkService::getLinksFromTagArray($request->tagNames);
        return view('link.links', ['links' => $links, 'tagNames' => $request->tagNames]);
    }

    public function links()
    {
        $links = LinkService::getRecentlyLinks();
        return view('link.links', ['links' => $links]);
    }

    public function access(Request $request)
    {
        $sessionId = $request->cookie('LINLINK_SESSION_ID');
        logger($sessionId);
        $linkId = $request->link_id;

        $message = LinkService::createAccessRelatedLink($sessionId, $linkId);
        return response()->json(['message' => $message]);
    }
}
