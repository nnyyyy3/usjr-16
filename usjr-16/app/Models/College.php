<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model{

    use HasFactory;

    protected $fillable = ['collfullname', 'collshortname'];

    public function departments(){
        return $this->hasMany(Department::class, 'deptcollid');
    }

    public function programs(){
        return $this->hasMany(Program::class, 'progcollid');
    }

    public function students(){
        return $this->hasMany(Student::class, 'studcolid');
    }
}
