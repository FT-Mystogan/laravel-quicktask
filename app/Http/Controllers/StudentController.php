<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddClassRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Http\Requests\AddStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view('admin.students.list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.students.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddStudentRequest $request)
    {
        $data = 'Thêm thành công';
        DB::table('students')->insert([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'address' => $request->input('address'),
            'gender' => $request->input('gender')
        ]);


        return view('admin.students.add', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classes = DB::table('students')
            ->join('student_class', 'students.id', '=', 'student_class.student_id')
            ->join('classes', 'student_class.class_id', '=', 'classes.id')
            ->where('students.id', $id)
            ->select('students.name as student_name', 'classes.name')
            ->get();

        return view('admin.students.show', compact('classes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = DB::table('students')->where('id', $id)->first();

        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, $id)
    {
        $row = DB::table('students')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'age' => $request->input('age'),
                'address' => $request->input('address'),
                'gender' => $request->input('gender')
            ]);

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id', $id)->delete();

        return redirect()->back();
    }
}
