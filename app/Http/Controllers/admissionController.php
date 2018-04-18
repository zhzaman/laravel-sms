<?php

namespace App\Http\Controllers;

use App\admissionModel;
use Illuminate\Http\Request;
use Validator;
class admissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admission.showadmission');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admission.admission');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $input = $request->all();
       $validator = validator::make($input,[
            'name'=>'required|max:50',
            'fathername'=>'required|max:50',
            'mothername'=>'required|max:50',
            'class'=>'required',
            'dateofbirth'=>'required',
            'phone'=>'required|max:14',
            'gender'=>'required',
            'address'=>'required|max:256',
            'bloodgroup'=>'required',
            'shift'=>'required',
            'nidofguardian'=>'required',
            'preschool'=>'required',
            'guardianname'=>'required',
            'image'=>'required',
       ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/files',$fileName);
            $input['image']=$fileName;
        }
        try {
            $data = admissionModel::create($input);
            $bug=0;
        }
        catch (\Exception $e) {
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect('admission/create')->with('msg','Student Admission successfully');
        }
        else
        {
            return redirect('admission/create')->with('msgerror','Student Admission successfully');
        }
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
