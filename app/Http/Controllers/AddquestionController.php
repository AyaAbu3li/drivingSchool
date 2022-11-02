<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\AddQue;
use App\Models\Category as ModelsCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AddquestionController extends Controller
{
    function AddQuestion(){
        view('admin.addQuestion');
    }
    function DataInsert(Request $request){
       $question= $request->input('question');
       $ques = $request->input('ques');
       $ans1= $request->input('ans1');
       $ans2= $request->input('ans2');
       $ans3= $request->input('ans3');
       $ans4= $request->input('ans4');
       $correctQ= $request->input('correctQ');

       $isInsertSuccress= AddQue::insert(['examType'=>$question,'question'=>$ques,
       'answer1'=>$ans1
       ,'answer2'=>$ans2,'answer3'=>$ans3,'answer4'=>$ans4,'correctAnswer'=>$correctQ]);
    }
    public function show()
    {
        $data=AddQue::all();
        return view('admin\questionList',['exams'=>$data]) ; 
    }
    public function destroy($item_id){

        $data =AddQue::find($item_id)->delete();
        return redirect('admin\questionList');


    }
    function index(){
        $data=Category::all();
        return View('admin\addQuestion',['exams_category'=>$data]);
    }
}
