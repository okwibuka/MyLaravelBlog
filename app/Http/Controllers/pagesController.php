<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function about(){

        $title = " this is about";
        // $head = "this is the head" ;
        // return view('pages/index' , compact('title','head'));
        return view('pages/about')->with('about',$title) ;
    }
    public function home(){
        $title = 'welcome to laravel';
        return view('pages/home') ->with('home' , $title);
    }
    public function services(){

    //     $data = array (
    //         'title' => 'services',
    //         'services' => ['web design', 'programming' , 'coding']
    //     );
    //     return view('pages/services') ->with('services' ,$data) ;
    // }

    $title = 'this is services';
    return view('pages/services') ->with('services' , $title);
    }
}
