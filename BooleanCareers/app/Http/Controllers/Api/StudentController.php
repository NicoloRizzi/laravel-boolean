<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * STUDENT FILTERED BY GENDER ENDPOINT
     */
    public function gender (Request $request) {
        $student = config('students.students');
        $genders = config('students.genders');
        //REQUEST DATA
        $gender = $request->input('filter');
    }

}
