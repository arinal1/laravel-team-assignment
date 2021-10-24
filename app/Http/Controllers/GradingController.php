<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradingController extends Controller
{
    public function index()
    {
        return view('grading')->with('result', []);
    }

    public function doGrading(Request $request)
    {
        $quiz = $request->input('quiz');
        $assignment  = $request->input('assignment');
        $attendance  = $request->input('attendance');
        $practice  = $request->input('practice');
        $final = $request->input('final');
        $scoreSum = $quiz + $assignment + $attendance + $practice + $final;
        $scoreAverage = $scoreSum / 5;
        $grade = '';
        switch (true) {
            case $scoreAverage <= 65:
                $grade = 'D';
                break;
            case $scoreAverage <= 75:
                $grade = 'C';
                break;
            case $scoreAverage <= 85:
                $grade = 'B';
                break;
            default:
                $grade = 'A';
                break;
        }
        $result = [
            'success' => true,
            'data' => [
                'scoreAverage' => $scoreAverage,
                'scoreGrade' => $grade
            ]
        ];
        return view('grading')->with('result', $result);
    }
}
