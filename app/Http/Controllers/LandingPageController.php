<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
   public function index()
   {
    return view('front-end.landing-page.landing_page');
   }
}
