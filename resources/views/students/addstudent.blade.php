@extends('layouts.master')
@section('title','Add student')
@section('content')
    <h2 class="text-center mb-3">Add student</h2>
    {!! Form::open(array('route'=>'addstudent.store', 'class'=>'' , 'files'=>true)) !!}
    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {{ Form::label('name', 'Full Name') }}
        {{ Form::text('name','',array('class'=>'form-control','placeholder'=>'Enter your full name')) }}
        @if($errors->has('name'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('name') }}</strong>
                   </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {{ Form::label('class', 'Class') }}
        {{ Form::text('class','',array('class'=>'form-control','placeholder'=>'Enter your class')) }}
        @if($errors->has('class'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('class') }}</strong>
                   </span>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('roll', 'Roll') }}
        {{ Form::text('roll','',array('class'=>'form-control','placeholder'=>'Enter your roll')) }}
    </div>
    <div class="form-group">
        {{ Form::label('session', 'Session') }}
        {{ Form::text('session','',array('class'=>'form-control','placeholder'=>'Enter your Session')) }}
    </div>
    <div class="form-group">
        {{ Form::label('shift', 'Shift') }}
        {{ Form::text('shift','',array('class'=>'form-control','placeholder'=>'Enter your shift')) }}
    </div>
<div class="form-group">
        {{ Form::label('studentid', 'Studentid') }}
        {{ Form::text('studentid','',array('class'=>'form-control','placeholder'=>'Enter your studentid')) }}
    </div>
<div class="form-group">
        {{ Form::label('section', 'Section') }}
        {{ Form::text('section','',array('class'=>'form-control','placeholder'=>'Enter your section')) }}
    </div>
    <div class="form-group">
        {{ Form::label('fathername', 'Fathername') }}
        {{ Form::text('fathername','',array('class'=>'form-control','placeholder'=>'Enter your fathername')) }}
    </div>
    <div class="form-group">
        {{ Form::label('mothername', 'Mothername') }}
        {{ Form::text('mothername','',array('class'=>'form-control','placeholder'=>'Enter your mothername')) }}
    </div>
    <div class="form-group">
        {{ Form::label('datofbirth', 'Datofbirth') }}
        {{ Form::date('datofbirth','',array('class'=>'form-control','placeholder'=>'Enter your datofbirth')) }}
    </div>
    <div class="form-group">
        {{ Form::label('phone', 'Phone') }}
        {{ Form::text('phone','',array('class'=>'form-control','placeholder'=>'Enter your phone')) }}
    </div>
    <div class="form-group">
        {{ Form::label('gender', 'Select gender') }}
        {{ Form::select('gender',['F'=>'Female','M'=>'Male']) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::textarea('address','',array('class'=>'form-control','placeholder'=>'Enter your address')) }}
    </div>

       <div class="form-group">
        {{ Form::label('bloodgroup', 'Bloodgroup') }}
        {{ Form::text('bloodgroup','',array('class'=>'form-control','placeholder'=>'Enter your bloodgroup')) }}
    </div>

       <div class="form-group">
           {{ Form::label('image', 'Profile Image', array('class'=>'control-label'))}}
           {{ Form::file('image', array('class'=>'col-md-6 form-control'))}}

    </div>

       <div class="form-group">
        {{ Form::label('nidofguardian', 'Nid of guardian') }}
        {{ Form::text('nidofguardian','',array('class'=>'form-control','placeholder'=>'Enter your nidofguardian')) }}
    </div>

       <div class="form-group">
        {{ Form::label('guardian', 'Guardian Name') }}
        {{ Form::text('guardian','',array('class'=>'form-control','placeholder'=>'Enter your guardian Name')) }}
    </div>



    {{ Form::submit('submit',array('class'=>'btn btn-primary')) }}

    {!! Form::close() !!}

@endsection