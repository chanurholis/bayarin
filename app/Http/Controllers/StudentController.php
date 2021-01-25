<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $students   = Student::get()->all();
        $count      = Student::get()->count();

        return view('vendor.students.index', [
            'students' => $students,
            'count'    => $count
        ]);

        return view('vendor.students.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('vendor.students.create');
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
            'first_name'    => 'required',
            'last_name'     => 'required',
            'name'          => 'nullable',
            'nisn'          => 'required|numeric',
            'nis'           => 'required|numeric',
            'date_of_birth' => 'required|date',
            'gender'        => 'required',
            'classroom'     => 'required',
            'phone_number'  => 'required|numeric',
            'email'         => 'required|email',
            'address'       => 'required'
        ]);

        $data = [];
        foreach ($request->all() as $key => $value) {
            $data[$key] = $value;
        }

        $data['name'] = $data['first_name'] . " " . $data['last_name'];

        Student::create($data);

        return redirect('/students/create')->with('status', 'Student has added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        dd($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student): View
    {
        $classrooms = [
            1,
            2
        ];

        $genders    = [
            'Male',
            'Female'
        ];

        return view('vendor.students.edit', [
            'model'         => $student,
            'classrooms'    => $classrooms,
            'genders'       => $genders
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'          => 'required',
            'nisn'          => 'required',
            'nis'           => 'required',
            'date_of_birth' => 'required',
            'gender'        => 'required',
            'classroom_id'  => 'required',
            'phone_number'  => 'required',
            'address'       => 'required',
        ]);

        $student->update($request->all());

        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        return redirect('/students');
    }
}
