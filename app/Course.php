<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $fillable = ['name','course_code','course_credit','deptID','semesterID','userID'];
	
	
	public function dept(){
        return $this->belongsTo('App\Department','deptID');
    }
	public function semester(){
        return $this->belongsTo('App\Semester','semesterID');
    }
}
