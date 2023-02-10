<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		// 	$student = Student::when(request()->q, function($student) {
		// 		$student = $student->where('name', 'like', '%'. request()->q . '%');
		// })->with('classroom')->latest()->paginate(5);
		$student = Student::with(['classroom'])->get();

		return inertia('Admin/Student/Index', compact('student'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classroom = Classroom::all();
				return inertia('Admin/Student/Create', compact('classroom'));
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
					'name' => 'required|string|max:25',
					'nisn'	=> 'required|numeric|unique:students',
					'gender' => 'required|string',
					'password' => 'required|confirmed',
					'classroom_id' => 'required'
				]);

				$student = Student::create([
					'name' => $request->name,
					'nisn' => $request->nisn,
					'gender' => $request->gender,
					'password' => bcrypt($request->password),
					'classroom_id' => $request->classroom_id
				]);

				return redirect()->route('student.index');
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
