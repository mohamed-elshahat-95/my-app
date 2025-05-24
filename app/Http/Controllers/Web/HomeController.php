<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    //    return view('crm.home.index');
       return view('crm.home.me');
    }
}
