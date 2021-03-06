<?php

namespace App\Http\Controllers;

use App\studentModel;
use App\subjectModel;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
class subjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$subjectdata = subjectModel::get();
        $teacher = DB::table('teacher')
        ->join('subjects', 'subjects.teacherid', '=', 'teacher.id')
        ->get();
        return view('students.allsubject',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $teacher  = DB::table('teacher')->get();
        return view('students.addsubject',compact('teacher'));
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
           'subjectname'=>'required',
           'class'=>'required',
           'teacherid'=>'required',
           'fullmark'=>'required',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = subjectModel::create($input);
        return redirect('/subject');
       // return "Subject added successfully";
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
        $editdata = subjectModel::findOrFail($id);
        $editteacher  = DB::table('teacher')->get();
        return view('students.subjectedit',compact('editdata','editteacher'));
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
       $inputdata = subjectModel::findOrFail($id);
       $data = $request->all();
       $inputdata->update($data);
       return redirect('/subject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $deleteData = subjectModel::findOrFail($id);
        $deleteData->delete($deleteData);
        return redirect('/subject');
    }
}
