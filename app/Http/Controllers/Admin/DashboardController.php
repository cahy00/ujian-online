<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Exam;
use App\Models\ExamSession;
use App\Models\Classroom;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //count student
			$students = Student::count();

			//count exams
			$exams = Exam::count();

			//count exam session
			$exam_sessions = ExamSession::count();

			//count classroom
			$classrooms = Classroom::count();
			return Inertia::render('Admin/Dashboard/Index', [
				'students' 		 	=> $students,
				'exams' 				=> $exams,
				'exam_sessions' => $exam_sessions,
				'classrooms'    => $classrooms,
			]);
    }
}
