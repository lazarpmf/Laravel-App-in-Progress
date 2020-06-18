<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    		$title='Find us using Google Maps';
    		return view('welcome', compact('title'));
    }
    public function about(){
   
    		/*mozemo da proslijedimo asocijativne nizove, sto je dobra stvar.*/


    		$assocArray=array('title' => 'About page' ,
    						  'about' => 'This is the about page from assoc array from PagesController.',
    						  'services' => ['web design', 'programming', 'maths']
    		 );
    		return view('about')->with($assocArray);
    }
}
