<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use App\Categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = Post::All();
        $data = DB::table('posts')
            ->leftJoin('categories', 'posts.id_category', '=', 'categories.id')
            ->select('posts.*','categories.*')
            //->get()
            ->paginate(3);

        $allcat = DB::table('categories')->get();

        return view('home', compact('data', 'allcat'));
    }

    public function post($slug)
    {
        $post = DB::table('categories')
            ->leftJoin('posts', 'posts.id_category', '=', 'categories.id')
            ->where('posts.slug', $slug)->first();

         $prev = Post::where('id', '<', $post->id)
            ->orderBy('id', 'DESC')
            ->first();

        $next = Post::where('id', '>', $post->id)
            ->orderBy('id', 'ASC')
            ->first();

        $allcat = DB::table('categories')->get();

        return view('post', compact('prev', 'next', 'allcat'))->withPost($post);

    }


    public function categories($cat_slug)
    {
        $cat = DB::table('categories')
            ->leftJoin('posts', 'posts.id_category', '=', 'categories.id')
            ->select('posts.*','categories.*')
            ->where('categories.cat_slug', $cat_slug)
            ->get();

        $currentCat = DB::table('categories')
            ->select('category_name')
            ->where('cat_slug', $cat_slug)
            ->get();

        $allcat = DB::table('categories', 'allcat')->get();

        return view('category', compact('cat', 'currentCat', 'allcat'));

    }

   
}
