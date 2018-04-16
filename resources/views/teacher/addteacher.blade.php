@extends('layouts.master')
@section('title','Add teacher')
@section('content')
    <h2 class="text-center mb-3">Add Teacher</h2>
{!! Form::open(array('route'=>'teacher.store','class'=>'','files'=>true)) !!}
    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {{ Form::label('name', 'Full Name') }}
        {{ Form::text('name','',array('class'=>'form-control','placeholder'=>'Enter your full name')) }}
        @if($errors->has('name'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('dateofbirth') ? 'has_error' : '' }}">
        {{ Form::label('dateofbirth','Date of birth') }}
        {{ Form::date('dateofbirth','',array('class'=>'form-control') ) }}
        @if($errors->has('name'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('dateofbirth') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('phone') ? 'has_error' : '' }}">
        {{ Form::label('phone','phone') }}
        {{ Form::text('phone','',array('class'=>'form-control') ) }}
        @if($errors->has('phone'))
            <span class="help-block" style="display: block">
        <strong>{{ $errors->first('phone') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('address') ? 'has_error' : '' }}">
        {{ Form::label('address','address') }}
        {{ Form::textarea('address','',array('class'=>'form-control') ) }}
        @if($errors->has('address'))
            <span class="help-block" style="display: block">
        <strong>{{ $errors->first('address') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('nid') ? 'has_error' : '' }}">
        {{ Form::label('nid','Nid Number') }}
        {{ Form::text('nid','',array('class'=>'form-control') ) }}
        @if($errors->has('nid'))
            <span class="help-block" style="display: block">
        <strong>{{ $errors->first('nid') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('gender') ? 'has_error':'' }}">
        <label for="gender">Gender</label>
        <select name="gender" class="form-control">
            <option value="">Select Gender</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
        </select>
        @if($errors->has('gender'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('gender') }}</strong>
           </span>
        @endif
    </div>

    <div class="form-group mb-3 {{ $errors->has('bloodgroup') ? 'has_error':'' }}">
        <label for="bloodgroup">Blood Group</label>
       <select name="bloodgroup" class="form-control">
           <option value="">Select Blood Group</option>
           <option value="AB">AB+</option>
           <option value="A-">A-</option>
           <option value="o+">O+</option>
           <option value="O-">O-</option>
           <option value="B+">B+</option>
           <option value="B-">B-</option>
       </select>
        @if($errors->has('bloodgroup'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('bloodgroup') }}</strong>
           </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('image') ? 'has_error':'' }}">
        {{ Form::label('image', 'Teacher Image', array('class'=>'control-label'))}}
        {{ Form::file('image', array('class'=>'col-md-6 form-control'))}}
        @if($errors->has('image'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('image') }}</strong>
           </span>
        @endif
    </div>

    {{ Form::submit('Add teacher',array('class'=>'btn btn-primary mt-3')) }}

{!! Form::close() !!}
@endsection
