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
        $students = config('students.students'); // ARRAY STUDENTI 
        $genders = config('students.genders'); // ARRAY M,F,ALL
        //REQUEST DATA
        $gender = $request->input('filter');

        $result = [
            'error' => '',
            'response' => []
        ];

        // CHECK FOR VALUE $GENDER IS IN ARRAY $GENDERS
        if (in_array($gender, $genders)) {
            if($gender == 'all') {
                $result['response'] = $students;
            } else {
                foreach ($students as $student) {
                    if ($student['genere'] == $gender) {
                        $result['response'][] = $student;
                    }
                }
            }
        } else {
            $result['error'] = 'Filter not allowed';
        }
        
        return response()->json($result);
    }

}
