<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Lop;
use App\Models\Student_Class;
use App\Http\Requests\AddStudentClassRequest;
use Illuminate\Support\Facades\DB;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        $classes = Lop::all();

        return view('admin.student_class.add', compact('students', 'classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddStudentClassRequest $request)
    {
        $student_id = $request->input('student');
        $class_id = $request->input('class');
        $students = Student::all();
        $classes = Lop::all();
        $tmp = DB::table('student_class')->where('student_id', $student_id)->where('class_id', $class_id)->count();
        if ($tmp != 1) {
            $data = 'Thêm thành công';
            DB::table('student_class')->insert([
                'student_id' => $student_id,
                'class_id' => $class_id,
            ]);

            return view('admin.student_class.add', compact('students', 'classes', 'data'));
        }
        $data = 'Học sinh đã đăng ký lớp này rồi';

        return view('admin.student_class.add', compact('students', 'classes', 'data'));
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
