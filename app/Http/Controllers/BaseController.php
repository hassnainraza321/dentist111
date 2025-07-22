<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Route;
use Helper;
use Cache;
use Artisan;

class BaseController extends Controller
{
    public function index(Request $request)
    {
        return Cache::rememberForever('home', function() {

            $posts = DB::table('posts')->where('is_active', 1)->orderBy('created_at', 'desc')->limit(3)->get();
            return view('home')->with(compact('posts'))->render();
        });
    }

    public function ourLocation(Request $request)
    {
        return Cache::rememberForever('our-location', function() {

            return view('our-location')->render();
        });
    }

    public function privacyPolicy()
    {
        return Cache::rememberForever('privacy-policy', function() {

            return view('polices.privacy-policy')->render();
        });
    }

    public function sitemap(Request $request)
    {
        $data = [
            'routes' => Route::getRoutes(),
            'posts' => DB::table('posts')->where('is_active', 1)->orderBy('created_at', 'desc')->get(),
            'counties' => DB::table('counties')->where('is_active', 1)->orderBy('slug', 'asc')->get(),
            'cities' => DB::table('cities')->where('is_active', 1)->orderBy('slug', 'asc')->get(),
            'towns' => DB::table('towns')->where('is_active', 1)->orderBy('slug', 'asc')->get(),
        ];

        return response()->view('sitemap', $data)->header('Content-Type', 'text/xml');
    }

    public function plan111(Request $request)
    {
        return Cache::rememberForever('plan111', function() {

            return view('plan111')->render();
        });
    }
}
