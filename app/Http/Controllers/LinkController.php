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
}
