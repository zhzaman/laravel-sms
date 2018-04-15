<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subjectModel extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['subjectname','class','teacherid','fullmark'];
}
