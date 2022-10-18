<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ExamsController extends Controller
{
    public function index()
    {
        $examType = DB::select('select examType from exams_category');
        return view('in/exams',['examType'=> $examType]);
    }

    public function exam(Request $request) // $request->examType
    {
            $results = DB::select(
                'select * from exams where examType = :id',
                ['id' => $request->examType]
            );
            // dd($results);
            
        return view('in/exams2',['data'=> $results,'examType'=> $request->examType]);

    }
}
