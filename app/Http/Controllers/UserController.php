<?php

namespace App\Http\Controllers;
use App\userModel;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function index(){
    	//$data = userModel::all();
    	$sum = 5 + 6;
    	return view('welcome',compact('sum'));
    }
}
