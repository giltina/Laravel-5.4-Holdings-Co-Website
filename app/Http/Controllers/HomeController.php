<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
     public function getIndex()
    {
      $slide['slide'] = DB::table('slides')->orderby('id')->take(4)->get();
      $announcement['announcement'] = DB::table('announcements')->orderby('id')->take(4)->get();
      
        return view('home.index')->with($slide)->with($announcement);
    }

    public function getHistory()
    {
$announcement['announcement'] = DB::table('announcements')->orderby('id')->take(4)->get();
        return view('home.history')->with($announcement);
        
    }

    public function getBeliefs()
    {
$announcement['announcement'] = DB::table('announcements')->orderby('id')->take(4)->get();
        return view('home.beliefs')->with($announcement);
    }

    public function getManagement()
    {
$announcement['announcement'] = DB::table('announcements')->orderby('id')->take(4)->get();
        return view('home.management')->with($announcement);
    }

    public function getCareers()
    {
$announcement['announcement'] = DB::table('announcements')->orderby('id')->take(4)->get();
        return view('home.careers')->with($announcement);
    }

    public function getContact()
    {
$announcement['announcement'] = DB::table('announcements')->orderby('id')->take(4)->get();
        return view('home.contact')->with($announcement);
    }

    
}
