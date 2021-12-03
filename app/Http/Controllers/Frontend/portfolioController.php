<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function port()
    {
      return view('Front-End.portfolio-details');
    }
}
