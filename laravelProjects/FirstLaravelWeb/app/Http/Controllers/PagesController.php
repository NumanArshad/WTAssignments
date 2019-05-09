<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="this title is for index  page from index function in PagesController";
        return view('pages.index',compact('title'));
    }
    public function about(){
        $aboutData="hello from pagescontroller";
        return view('pages.about')->with('title',$aboutData);
    }
    public function services(){
        $data=array('title'=>'services title ',
    'servicesList'=>['MERN Stack','Django ','Laravel']);
        return view('pages.services')->with($data);
    }
}
