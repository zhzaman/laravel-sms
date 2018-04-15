@extends('layouts.master')
@section('title','Edit subject')
@section('content')
    {!! Form::open(array('route'=>['subject.update',$editdata->id],'method'=>'PUT','class'=>'','files'=>true)) !!}
    <h2 class="text-center">Add Subject</h2>
    <div class="form-group {{ $errors->has('subjectname') ? 'has_error':'' }}">
        {{ Form::label('subjectname','Subject Name') }}
        {{ Form::text('subjectname',$editdata->subjectname,array('class'=>'form-control')) }}
        @if($errors->has('subjectname'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('subjectname') }}</strong>
           </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('class') ? 'has_error':'' }}">
        {{ Form::label('class','Class') }}
        {{ Form::select('class',[$editdata->class,'6'=>'Six','7'=>'Seven','8'=>'Eight','9'=>'Nine','10'=>'Ten']) }}
        @if($errors->has('class'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('class') }}</strong>
           </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('teacherid') ? 'has_error':'' }}">
        {{ Form::label('teacherid','Techer') }}
        {{ Form::select('teacherid',[$editdata->teacherid,'1'=>'Hasan','2'=>'Karim']) }}
        @if($errors->has('teacherid'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('teacherid') }}</strong>
           </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('fullmark') ? 'has_error':'' }}">
        {{ Form::label('fullmark','Full Mark') }}
        {{ Form::text('fullmark',$editdata->fullmark,array('class'=>'form-control')) }}
        @if($errors->has('fullmark'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('fullmark') }}</strong>
           </span>
        @endif
    </div>
    {{ Form::submit('Add subject',array('class'=>'btn btn-primary')) }}

    {!! Form::close() !!}



@endsection