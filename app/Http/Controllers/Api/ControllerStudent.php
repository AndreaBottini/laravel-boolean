<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerStudent extends Controller
{




    public function gender(Request $request)
    {
        $data = $request->all();

        $genders = config('students.genders');
        $students = config('students.students');

        $result = [
            'error' => '',
            'response' => []
        ];


        if(in_array($data['gender'], $genders)) {
            if($data['gender'] == 'all') {
                $result['response'] = $students;
                return response()->json($result);
            } 
            elseif ($data['gender'] == 'm') {
                foreach ($students as $key => $student) {
                    if($data['gender'] == 'm') {
                        $result['response'][] = $student;
                    }
                }
                return response()->json($result);
            }    
        }
    }
}
