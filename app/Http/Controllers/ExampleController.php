<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

     public function getAll(){
        $data = array(
            "status" =>200,
            "response" => "success",
            "data" =>DB::table('wp_posts')
            ->select('id', 'guid','post_status','post_title','post_content')
            ->where('post_status','publish')
            ->orderBy('id', 'DESC')
            ->take(5)
            ->get()
        );

        return $data;
    }

    public function getId($id){
        $data = array(
            "status" =>200,
            "response" => "success",
            "data" =>DB::table('wp_posts')
            ->select('ID', 'guid','post_status','post_title','post_content')
            ->where('post_status','publish')
            ->where('ID', $id)  
            ->get()
        );
        
        return $data;
    }

    public function getImage(){
        $data = array(
            "status" =>200,
            "response" => "success",
            "data" =>DB::table('wp_posts')
            ->select('id', 'guid','post_status')
            ->where('guid', 'like', '%https://maungaji.co.id/artikel/wp-content/uploads%')
            ->where('post_status','inherit')
            ->orderBy('id', 'DESC')
            ->get()
        );

        return $data;
    }
}
