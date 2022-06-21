<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $posts = [

            [
                'title'=> 'post1'
            ]
            ,
            [
                'title'=> 'post2'
            ]
            ,
            [A
                'title'=> 'post3'
            ]
        ];
        return view('home',compact('posts'));
    }
}
