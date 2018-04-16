<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Admission going on</title>
</head>
<body>
<div class="container">
    <div class="row">
<div class="col-lg-2"></div>
    <div class="col-lg-8">
        <h2 class="text-center mb-3 mt-3">Student Admission</h2>
        {!! Form::open(array('route'=>'admission.store','class'=>'','files'=>true)) !!}
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {{ Form::label('name', 'Full Name') }}
            {{ Form::text('name','',array('class'=>'form-control','placeholder'=>'Enter your full name')) }}
            @if($errors->has('name'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('fathername') ? 'has-error' : '' }}">
            {{ Form::label('fathername', 'Father Name') }}
            {{ Form::text('fathername','',array('class'=>'form-control','placeholder'=>'Enter your father name')) }}
            @if($errors->has('fathername'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('fathername') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('mathername') ? 'has-error' : '' }}">
            {{ Form::label('mathername', 'Mother Name') }}
            {{ Form::text('mathername','',array('class'=>'form-control','placeholder'=>'Enter your mother name')) }}
            @if($errors->has('mathername'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('mathername') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('class') ? 'has_error':'' }}">
            <label for="class">Class</label>
            <select class="form-control" name="class">
                <option value="">Select Class</option>
                <option value="Six">Six</option>
                <option value="Seven">Seven</option>
                <option value="Eight">Eight</option>
                <option value="Nine">Nine</option>
                <option value="Ten">Ten</option>
            </select>
            @if($errors->has('class'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('class') }}</strong>
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
            {{ Form::label('phone','Phone Number') }}
            {{ Form::text('phone','',array('class'=>'form-control','placeholder'=>'Enter your phone number') ) }}
            @if($errors->has('phone'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('phone') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('gender') ? 'has_error':'' }}">
            <label for="gender">Blood Group</label>
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
        <div class="form-group {{ $errors->has('address') ? 'has_error' : '' }}">
            {{ Form::label('address','address') }}
            {{ Form::textarea('address','',array('class'=>'form-control') ) }}
            @if($errors->has('address'))
                <span class="help-block" style="display: block">
        <strong>{{ $errors->first('address') }}</strong>
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
        <div class="form-group mb-3 {{ $errors->has('shift') ? 'has_error':'' }}">
            <label for="shift">Shift</label>
            <select name="shift" class="form-control">
                <option value="">Select Shift</option>
                <option>Morning</option>
                <option>Evening</option>
            </select>
            @if($errors->has('shift'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('shift') }}</strong>
           </span>
            @endif
        </div>



        {{ Form::submit('Admission',array('class'=>'btn btn-primary mt-3')) }}
        {!! Form::close() !!}
    </div>
<div class="col-lg-2"></div>
    </div>
</div>






























<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>