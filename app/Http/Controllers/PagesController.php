<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{

    public function index()
    {
        //passing data to a page
        $title = " My Title";
        return view('pages.index' , compact('title'));
    }

    public function about()
    {
        //method 2 of passing data to page
        return view('pages.about')->with('title',$title);
    }
    public function services()

    {
        $data = array(
            'title'=>'Services',
            'services'=>['Web Design' , 'Programming','Mobile']
        );
        //passing an array
        return view('pages.services')->with($data);
    }

}
