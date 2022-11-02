<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class AddCoursesController extends Controller
{
    function AddCourses(){
        view('admin.addCourses');
    }
    function DataInsert(Request $request){
       $name= $request->input('name');
       $photo = $request->input('photo');
       $price= $request->input('price');


       $isInsertSuccress= Courses::insert(['name'=>$name,'price'=>$price,
       'img'=>$photo
      ]);
    }
}
