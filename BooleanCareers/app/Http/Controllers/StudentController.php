<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * MAIN PAGE STUDENT
     */
    public function index()
    {
        return view('students.index');
    }

    /**
     * DETAIL PAGE STUDENT
     */
    public function show($id)
    {

    }
    
}
