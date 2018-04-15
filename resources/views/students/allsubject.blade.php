@extends('layouts.master')
@section('title','All Subject List')
@section('content')
<h2 class="text-center mb-3">All Subject List</h2>


<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">SL</th>
        <th scope="col">Subject Name</th>
        <th scope="col">Class</th>
        <th scope="col">Teacher</th>
        <th scope="col">Marks</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php $i=1;?>
    @foreach($subjectdata as $subject)
    <tr>
        <td>{{$i++}}</td>
        <td>{{$subject->subjectname}}</td>
        <td>{{$subject->class}}</td>
        <td>{{$subject->teacherid}}</td>
        <td>{{$subject->fullmark}}</td>
        <td>

            {!! Form::open(array('route' => ["subject.destroy",$subject->id],'method'=>'DELETE')) !!}
            <a href="{{route('subject.edit',$subject->id)}}">
                <i class="fa fa-pencil"  style="padding: 5px; font-size: 20px;color:#15AABF;"></i>
            </a>
            <button>
                <i class="fa fa-trash" style="font-size: 20px;color:#15AABF;"></i>
            </button>

            {{--<a href="{{route('subject.edit',$subject->id)}}" class="btn-sm btn-primary">Edit</a>--}}
            {{--<button class="btn-sm btn-danger">Delete</button>--}}
            {!! Form::close() !!}
        </td>

    </tr>
        @endforeach
    </tbody>
</table>
@endsection