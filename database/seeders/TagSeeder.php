<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tags')->insert(
           ['title'=>'phyton','created_at'=>now(),'updated_at'=>now()],
           ['title'=>'php','created_at'=>now(),'updated_at'=>now()],
           ['title'=>'go','created_at'=>now(),'updated_at'=>now()],
           ['title'=>'c++','created_at'=>now(),'updated_at'=>now()],
           ['title'=>'js','created_at'=>now(),'updated_at'=>now()],

        );
    }
}
