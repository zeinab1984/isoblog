<?php

namespace App\Http\Controllers;

use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index ()
    {
//        $posts = DB::table('posts')->where('is_confirm','1')->where('category_id','1')->get();
//        $posts = DB::table('posts')->get();
//        dd($posts[0]->title);
//        $post = DB::table('posts')->first();
//        $post = DB::table('posts')->latest('id')->get();
//       $post = DB::table('posts')->find(2);
//       $post = DB::table('posts')->where('id',2)->first();
//        dd($post->title);
//        $titles = DB::table('posts')->pluck('title');
//        $count_posts = DB::table('posts')->count();
//        $posts = DB::table('posts')
//        ->select(DB::raw('COUNT(*) AS posts_count, is_confirm'))
//            ->where('is_confirm',1)
//            ->groupBy('is_confirm')
//            ->get();
//            dd($posts);






//        $v = new Verta();
//        dd($v);
        $posts = [

            [
                'title'=> 'post1'
            ]
            ,
            [
                'title'=> 'post2'
            ]
            ,
            [
                'title'=> 'post3'
            ]
        ];
        return view('home',compact('posts'));
    }
}
