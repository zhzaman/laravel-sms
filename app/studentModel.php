<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    protected $table = 'students';
    protected $fillable   = ['name', 'class', 'roll', 'session','shift','studentid','section','fathername','mothername','datofbirth','phone','gender','address','bloodgroup','nidofguardian','guardian','image'];
}
