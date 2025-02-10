<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    //
    function Sum_App()
    {
          return view('sum');
    }

    function Sum_cal(Request $input)
    {
         $ist=$input->a;
         $iind=$input->b;
         $ans=$ist+$iind;
         return view('sum',compact('ans'));
    }
}
