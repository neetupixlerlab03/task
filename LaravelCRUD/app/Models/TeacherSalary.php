<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherSalary extends Model
{
    protected $fillable = [
        'teacher_id', 'teacher_salary'
    ];
    public function teacher()
    {
        return $this->hasOne(Teacher::class,'id','teacher_id');
}
}
