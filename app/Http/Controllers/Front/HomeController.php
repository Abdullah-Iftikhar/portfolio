<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $returnArr['count'] = 10;
        return view('front.pages.home', $returnArr);
    }
}
