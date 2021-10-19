<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pages = '';
        return view('frontend.home', compact('pages'));
    }

    public function pages($pages)
    {
        return view('frontend.'.$pages, compact('pages'));
    }
}
