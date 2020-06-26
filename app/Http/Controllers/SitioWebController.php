<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioWebController extends Controller
{
   public function inicio(){
      return view('Sitioweb.inicio');
   }

    public function galeria(){
        return view('Sitioweb.galeria');
    }

   public function timeline(){
        return view('Sitioweb.timeline');
     }
   public function contact(){
        return view('Sitioweb.contact');
     }
}
