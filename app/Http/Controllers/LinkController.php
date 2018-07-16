<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        return view('link.index');
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
