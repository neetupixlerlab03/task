<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TeacherSalary;

class TeacherSalaryController extends Controller

{     
    public function ViewList(Request $request){

       $salaryList = TeacherSalary::with('teacher')->get();
       
    
        return view('viewList', compact('salaryList'));
    }


    public function create(Request $request)
    {
        $salary = TeacherSalary::where('teacher_id',$request->id)->get();
      
    	return view('createSalary');
    }
    public function store(Request $request)
    {
    	$salary = new TeacherSalary;
    	$salary->teacher_id = $request->teacher_id;
    	$salary->teacher_salary= $request->teacher_salary;
    	$salary->save();

    	return 'create Successfully';

    }
}
