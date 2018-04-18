<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admissionModel extends Model
{
    protected $table = 'admission';
    protected $fillable=['name','fathername','mothername','class','dateofbirth','gender','address','bloodgroup','shift','nidofguardian','preschool','guardianname','image'];
}
