<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    function showStudents()
    {
        $students = Student::all();// Student::all()->where('id',2)
        //return $students;
        return view('All',['$studentList' => $students]);
    }
   
    
}
