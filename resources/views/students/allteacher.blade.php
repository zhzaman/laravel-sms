@extends('layouts.master')
@section('title','All teacher')
@section('content')

    <table class="table table-bordered">

        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
         <?php $i=1;?>
        @foreach($teacherData as $teacher)
        <tr>
            <td scope="row">{{$i++}}</td>
            <td>{{ $teacher->name }}</td>
            <td>
                {{--{{asset('public/public/files/$teacher->image')}--}}

                <img src='{{ asset("public/files/$teacher->image") }}' alt="{{ $teacher->name }}" width="50px" height="30px">
            
            </td>
            <td>{{ $teacher->phone }}</td>
            <td>

                {!! Form::open(array('route' => ["teacher.destroy",$teacher->id],'method'=>'DELETE')) !!}
                <a href="{{route('teacher.edit',$teacher->id)}}">
                    <i class="fa fa-pencil"  style="padding: 5px; font-size: 20px;color:#15AABF;"></i>
                </a>
                <button>
                    <i class="fa fa-trash" style="font-size: 20px;color:#15AABF;"></i>
                </button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

        </tbody>
    </table>


    @endsection