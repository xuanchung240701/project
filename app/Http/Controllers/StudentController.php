<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('index',compact('students'));
    }

    public function addStudent()
    {
        
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->address = $request->input('address');
        $student->class = $request->input('class');
        $student->save();
        return redirect()->back()->with('status','Add Student successfully!!!');
    }

    public function edit($id) {
        $student = Student::find($id);
        return view('edit',compact('student'));
    }

    public function update(Request $request ,$id) 
    {
        $student = Student::find($id); 
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->address = $request->input('address');
        $student->class = $request->input('class');
        $student->update();
        return redirect()->back()->with('status','Update successfully!!!');
    }

    public function delete($id) {   
        $student = Student::find($id);
        $student->delete();
        return redirect()->back()->with('status','Delete Student successfully!!!');
    }
}
