<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('home.content.home');
    }

    public function search(Request  $request)
    {
        $data = $request->except('_token');
    }
}
