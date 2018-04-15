@extends('layouts.master')
@section('title','All students')
@section('content')

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; ?>
        @foreach($allstudentdata as $student)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->gender}}</td>
                <td>
                    <a href="{{route('addstudent.edit',$student->id)}}" class="btn-sm btn-primary">Edit</a>
                </td>
                <td>
                    {!! Form::open(array('route' => ["addstudent.destroy",$student->id],'method'=>'DELETE')) !!}
                    <button class="btn-sm btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </thead>
    </table>




@endsection