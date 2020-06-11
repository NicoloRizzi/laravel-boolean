<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    public function __construct() {
        $this->students = config('students');
    }

    /**
     * MAIN PAGE STUDENT
     */
    public function index()
    {
        $students = $this->students;
        return view('students.index', compact('students'));
    }

    /**
     * DETAIL PAGE STUDENT
     */
    public function show($id)
    {

    }
    
}
