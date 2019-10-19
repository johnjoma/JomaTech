<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticpagesController extends Controller
{
    public function aboutpage(){

      return view("about");
    }

    public function contact(){

      return view("contact");
    }

    public function portfoliosingle(){

      return view("portfolio-single");
    }

    public function portfolio(){

      return view("portfolio");
    }
     
    public function portfolio2(){

      return view("portfolio2");
    }

    public function services(){

      return view("services");
    }


}
