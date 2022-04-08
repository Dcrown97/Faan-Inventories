<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaanController extends Controller
{
   public function Home()
   {
      return view('home');
   }
}
