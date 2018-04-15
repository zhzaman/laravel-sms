<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacherModel extends Model
{
    protected $table = 'teacher';
    protected $fillable = ['name','dateofbirth','phone','address','nid','gender','bloodgroup','image'];
}
