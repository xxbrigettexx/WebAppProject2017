<?php

namespace App\Http\Controllers;

use App\Food as Food;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;


class FoodController extends Controller
{
    public function showBakedChickenSchnitzel(Request $request)
    {
 		//
        return view ('onlinerecipe/BakedChickenSchnitzel');
    }

    public function showDoubleChocolateCupcakes($id, $name)
    {
    	//
    }

    public function showClassicMacaroniSalad($id, $name)
    {
    	//
    }

    public function showOldFashionedPeanutButterCookies($id, $name)
    {
    	//
    }

    public function showSlowCookerChickenTacoSoup($id, $name)
    {
    	//
    }

    public function showaboutUs(Request $request){

        return view('aboutUs');
    }
}
