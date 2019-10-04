<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
//     public function index(){

//         return view('pages.index');       
//     }

     public function index(){
        $title = "Read It !";
         //return view('pages.index',compact('title'));
         return view('pages.index')->with('title',$title);       
     }


// public function about(){
//         return view('pages.about');       
//     }

    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title',$title);       
    }

    // public function services(){
    //     return view('pages.services');       
    // }

    public function services(){
        //$title = "Services";
        $data = array(
            'title'=>'Services',
            'services'=>['Technology','Business','Entertainment','Politics','Sports']

        );
        return view('pages.services')->with($data);       
    }
}
