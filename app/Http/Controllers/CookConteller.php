<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cook;

class CookConteller extends Controller
{
    public function showHome(Request $request){
    	return view('home');
    }

     public function showComment(Request $request){
    	return view('comment');
    }

     public function showMenu(Request $request){
    	return view('menu');
    }

    public function saveUs(Request $request){

    	$cook = new Cook;
    	$cook->user = $request->user;
    	$cook->food = $request->food;
    	$cook->comment = $request->comment;
    	$cook->save();

    	return redirect('/');
    }

    public function showComments(Request $request){

    	$cooks = Cook::all();
    	return view('show-comment', compact('cooks'));
    }
}	

