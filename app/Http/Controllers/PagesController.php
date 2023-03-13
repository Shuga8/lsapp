<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){

        $data = [
            'title' => 'Laravel Tutorial'
        ];
        return view('pages.index')->with($data);
    }

    public function about(){
        $data = [
            'title' => 'About'
        ];
        return view('pages.about')->with($data);
    }

    public function services(){
        $data = [
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        ];

        return view('pages.index')->with($data);
    }
}
