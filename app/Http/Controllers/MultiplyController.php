<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplyController extends Controller
{
      function Multi_Calu(Request $rc)
      {
             if($rc->isMethod('get'))
             {
                return view('multiplication');
             }
             else 
             {
                $ist=$rc->a;
                $iind=$rc->b;
                $ans=$ist*$iind;
                //  return view('multiplication',compact('ans');
              //  return view('multiplication',['pankaj'=>"Your Result is $ans"]);
             //     return view('multiplication')->with('pankaj',"Your Result is $ans");
                return view('multiplication')->with('pankaj',"Your Result is $ans")->with('test',"i am Testing");
             }
      }
}
