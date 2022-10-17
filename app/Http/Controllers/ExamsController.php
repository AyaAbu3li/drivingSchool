<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ExamsController extends Controller
{
    public function index()
    {
        $examType = DB::select('select examType from exams_category');

        // $data = array();
        // foreach ($examType as $Name) {
        //     $si = $Name;
        //     $results = DB::select(
        //         'select * from signs_and_signals where examType = :id',
        //         ['id' => $Name->examType]
        //     );
        //    $data[] = (array)$results;  
        // }

        return view('in/exams',['examType'=> $examType
        // ,'data'=> $data
        ]);

    }

    public function exam()
    {
        return view('in/exams2'
        // ,['examType'=> $examType
        // ,'data'=> $data
        // ]
    );

    }
}
