<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function show()
    {
        $data=Students::all();
        return view('admin\students',['users'=>$data]) ; 
    }
}
