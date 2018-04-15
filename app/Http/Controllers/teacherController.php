<?php

namespace App\Http\Controllers;

use App\teacherModel;
use Illuminate\Http\Request;
use Validator;
class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacherData = teacherModel::get();
        return view('students.allteacher', compact('teacherData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.addteacher');
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
            'name'=>'required',
            'dateofbirth'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'nid'=>'required',
            'gender'=>'required',
            'bloodgroup'=>'required',
            'image'=>'required'
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
            $data=teacherModel::create($input);
            $bug=0;
        }
        catch (\Exception $e) {
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect('/teacher')->with('success', 'Teacher added successfully');
        }
        else
        {
            return redirect('/teacher')->with('error', 'Something went wrong!');
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
        try {
            $data = teacherModel::findOrFail($id);
            $data->delete($data);
            $bug=0;
        }
        catch (\Exception $e) {
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect('/teacher')->with('success', 'Teacher delete successfully');
        }
        else
        {
            return redirect('/teacher')->with('error', 'Something went wrong!');
        }

    }
}
