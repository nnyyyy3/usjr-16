<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model{
    use HasFactory;

    protected $fillable = ['studfirstname', 'studlastname', 'studmidname', 'studprogid', 'studcolid', 'studyyear'];

    public function college(){
        return $this->belongsTo(College::class, 'studcolid');
    }

    public function program(){
        return $this->belongsTo(Program::class, 'studprogid');
    }
}
