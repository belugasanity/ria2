<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkittleController extends Controller
{
    function rainbow (){
    	// return 'taste the rainbow!!!!!';
    	return view('welcome');
    }
}
