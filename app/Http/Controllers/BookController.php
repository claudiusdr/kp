<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index(){
    	return 'ini adalah index page Book';
    }

    public function viewJudul($judul){
    	$data=array(
    		'judul'=>$judul
    		);
    	return View::make('Book',$data);
    }
}
