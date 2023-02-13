<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Exam;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				$exam = Exam::with(['lesson', 'classroom'])->get();
        return inertia('Admin/Exam/Index', compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
				$classroom = Classroom::all();
				$lesson = Lesson::all();
        return inertia('Admin/Exam/Create', compact('classroom', 'lesson'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
				// 	'title' 					=> 'required|string',
				// 	'classroom_id' 		=> 'required|numeric',
				// 	'lesson_id' 			=> 'required|numeric',
				// 	'description' 		=> 'required',
				// 	'duration' 				=> 'required',
				// 	'random_question' => 'required',
				// 	'random_answer' 	=> 'required',
				// 	'show_answer'			=> 'required'
				// ]);

				$exam = Exam::create([
					'title' 					=> $request->title,
					'classroom_id' 		=> $request->classroom_id,
					'lesson_id' 			=> $request->lesson_id,
					'description' 		=> $request->description,
					'duration' 				=> $request->duration,
					'random_question' => $request->random_question,
					'random_answer' 	=> $request->random_answer,
					'show_answer'			=> $request->show_answer,
				]);

				return redirect()->route('exam');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
