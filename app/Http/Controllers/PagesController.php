<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        Session::put('name', 'Jane Doe');
        Session::put('name', 'Mary Jane');

        dd(
            Session::get('name')
        );

        return view('index');
    }

    public function about()
    {
        return view('about');
    }
}
