<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $name = 'ali';
        $family = 'alavi';
        $data =[
            'user_name'=> $name,
            'lastname'=> $family,
        ];
        return view('categories.post-index',$data);

    }
}
