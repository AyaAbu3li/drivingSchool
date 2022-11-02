<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\courses;
use App\Models\signsAndSignals;
use App\Models\Signscategory;

class signsAndSignalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectionName = DB::select('select DISTINCT sectionName from signs_and_signals');

        $items = array();
        foreach($sectionName as $Name) {
        $items[] = $Name;
}
        for ($x = 0; $x < count($items); $x++) {

        }
        $signs = DB::select('select * from signs_and_signals where');

        return view('in/signsAndSignals',['signs'=>$signs],['sectionName'=>$sectionName]);
        // return view('userout/courses');

    }
    function AddSign(){
        view('admin.addSign');
    }
    function DataInsert(Request $request){
       $name= $request->input('name');
       $sign = $request->input('sign');
       $details= $request->input('details');
       $photo= $request->input('photo');

       $isInsertSuccress= signsAndSignals::insert(['sectionName'=>$name,'signName'=>$sign
       ,'details'=>$details,'img'=>$photo]);
    }
    function signs(){
        $data=Signscategory::all();
        return View('admin\addSign',['signs_category'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
