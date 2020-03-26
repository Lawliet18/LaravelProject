<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $users = factory(App\User::class,5)->make();
        return view('pages.home',compact('users'));
    }
}
