<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function begin()
    {
        return view('start');
    }

    public function enterGrades(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        return view('attempts', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5

        ]);
    }

    protected function computeAverageScore($score1, $score2)
    {
        $average = ($score1 + $score2) / 2;
        return round($average, 2);
    }

    public function computeGrades(Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5;

        $st1_average = $this->computeAverageScore($request->p1_attempt1, $request->p1_attempt2);
        $st2_average = $this->computeAverageScore($request->p2_attempt1, $request->p2_attempt2);
        $st3_average = $this->computeAverageScore($request->p3_attempt1, $request->p3_attempt2);
        $st4_average = $this->computeAverageScore($request->p4_attempt1, $request->p4_attempt2);
        $st5_average = $this->computeAverageScore($request->p5_attempt1, $request->p5_attempt2);

        return view('scores', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,

            //student 1 grades
            'p1_attempt1' => $request->p1_attempt1,
            'p1_attempt2' => $request->p1_attempt2,
            'st1_average' => $st1_average,

            //student 2 grades
            'p2_attempt1' => $request->p2_attempt1,
            'p2_attempt2' => $request->p2_attempt2,
            'st2_average' => $st2_average,

            //student 3 grades
            'p3_attempt1' => $request->p3_attempt1,
            'p3_attempt2' => $request->p3_attempt2,
            'st3_average' => $st3_average,

            //student 4 grades
            'p4_attempt1' => $request->p4_attempt1,
            'p4_attempt2' => $request->p4_attempt2,
            'st4_average' => $st4_average,

            //student 5 grades
            'p5_attempt1' => $request->p5_attempt1,
            'p5_attempt2' => $request->p5_attempt2,
            'st5_average' => $st5_average,
        ]);


    }
}
