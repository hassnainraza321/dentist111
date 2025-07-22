<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cache;

class BlogController extends Controller
{
    public function blog(Request $request, $tag_slug = null)
    {
        if (empty($tag_slug)) 
        {
            $posts = DB::table('posts')->where('is_active', 1)->orderBy('created_at', 'desc')->paginate(12);
            return view('blog.index')->with(compact('posts'));
        }

        $tag = DB::table('tags')->where('slug', $tag_slug)->where('is_active', 1)->first();

        if (empty($tag))
        {
            abort(404);
        }

        $posts = DB::table('post_tags')
                ->leftJoin('posts', 'posts.id', '=', 'post_tags.post_id')
                ->where('tag_id', $tag->id)
                ->where('posts.is_active', 1)
                ->select('posts.*')
                ->orderBy('created_at', 'desc')
                ->paginate(12);

        return view('blog.index')->with(compact('posts', 'tag'));
    }

    public function blogDetails(Request $request, $slug = null)
    {
        if (empty($slug))
        {
            return redirect()->route('blog');
        }

        $post = DB::table('posts')->where('is_active', 1)->where('slug', $slug)->first();

        if (empty($post))
        {
            abort(404);
        }

        return Cache::rememberForever('blog-post-' . $post->id, function() use ($post) {

            $next_post = DB::table('posts')->where('is_active', 1)->where('id', '<', $post->id)->orderBy('id', 'desc')->first();
            $previous_post = DB::table('posts')->where('is_active', 1)->where('id', '>', $post->id)->orderBy('id', 'asc')->first();
            $recent_post = DB::table('posts')->where('is_active', 1)->orderBy('created_at', 'desc')->limit(5)->get();

            $tags = DB::table('tags')->where('is_active', 1)->get();

            return view('blog.post')->with(compact('post', 'next_post', 'previous_post', 'recent_post', 'tags'))->render();
        });
    }

    public function search(Request $request)
    {
        if (empty($request->keyword)) 
        {
            return redirect()->back();
        }

        return Cache::rememberForever('blog-posts' . $request->keyword , function() use ($request) {

            $posts = DB::table('posts')
                    ->where('title', 'like', '%' . $request->keyword . '%')
                    ->orWhere('slug', 'like', '%' . $request->keyword . '%')
                    ->where('is_active', 1)
                    ->orderBy('created_at', 'desc')
                    ->paginate(12);

            return view('blog.index')->with(compact('posts'))->render();
        });
    }
}
