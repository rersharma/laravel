<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandleRequestController extends Controller
{
    function Calauclation(Request $muskaan)
    {
        if($muskaan->isMethod('get'))
        {
           return view('subtraction');
        }
        else 
        {
              $a=$muskaan->a;
              $b=$muskaan->b;
              $c=$a-$b;
              return view('subtraction',compact('c'));
        }
    }
}
