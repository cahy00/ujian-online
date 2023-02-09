<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				// $lessons = Lesson::when(request()->q, function($lessons){
				// 	$lessons = $lessons->where('title', 'LIKE', '%' . request()->q . '%');
				// });

				// $lessons->appends(['q' => request()->q]);
				$lessons = Lesson::all();
        // return Inertia::render('Admin/Lesson/Index', [
				// 	'lessons' => $lessons
				// ]);
				return inertia('Admin/Lesson/Index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Lesson/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
				$request->validate([
					'title' => 'required|string|unique:lessons',
				]);

        $lessons = Lesson::create([
					'title' => $request->title
				]);

				return redirect('/admin/lesson');
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
				$lesson = Lesson::findOrFail($id);
        return inertia('Admin/Lesson/Edit', compact('lesson'));
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
				$request->validate([
					'title' => 'required|string'
				]);

        $lesson = Lesson::findOrFail($id);
				$lesson->update([
					'title' => $request->title
				]);

				return redirect()->route('lesson.index');
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
