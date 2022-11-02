<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    function AddEmployee(){
        view('admin.addEmployee');
    }
    function DataInsert(Request $request){
       $name= $request->input('name');
       $email = $request->input('email');
       $phone= $request->input('phone');
       $photo= $request->input('photo');
    

       $isInsertSuccress= Employee::insert(['name'=>$name,'email'=>$email,
       'phone'=>$phone
       ,'img'=>$photo]);
    }
    function show(){

        $data=Employee::all();
        return view('admin\teams',['team'=>$data]) ; 
    }

}
