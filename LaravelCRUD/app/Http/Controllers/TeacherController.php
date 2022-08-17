<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;
use App\Models\TeacherSalary;

class TeacherController extends Controller
{
    public function create()

    {
		
    	return view('createTeacher');
    }
    public function store(Request $request)
    {
    	$teacher = new Teacher;
    	$teacher->name = $request->teacher_name;
    	$teacher->email= $request->teacher_email;
    	$teacher->address= $request->teacher_address;

    	$teacher->save();
		

    	return 'Successfully inserted';

    }
}
