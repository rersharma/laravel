<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  #this is when yoiu want to write sql qury in Controller without using orm query
class StudentController extends Controller
{
    function Student_save(Request $st)
    {
         if($st->isMethod('get'))
         {
            return view('studeent');
         }
         else 
         {
             $n=$st->name;
             $r=$st->roll;
             $br=$st->branch;
             DB::insert('insert into students(name,roll,branch)values(?,?,?)',[$n,$r,$br]);
             return view('studeent')->with('ans',"$n Record Save Successfully");
         }
    }

     function Student_Display()
     {
          $student_records=DB::select("select * from students");
          return view('displaystudent',["students"=>$student_records]);
     }
}
