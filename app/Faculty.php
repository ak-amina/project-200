<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
	protected $table = 'faculties';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','phone_no','gender','image','designation','departmentID','userID'];

    public function dept(){
        return $this->belongsTo('App\Department','departmentID');
    }
}
