<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index() {
        $title = 'Welcome to my page!';
        return view('pages/index', compact('title'));
    }

    public function about() {
        $title = 'Welcome to my about page!';
        return view('pages/about')->with('blade_title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services!',
            'services' => ['Web Design', 'Marketing', 'Backend']
        );
        return view('pages/services')->with($data);
    }
}
