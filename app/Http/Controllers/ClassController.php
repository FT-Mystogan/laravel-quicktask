<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lop;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddClassRequest;
use App\Http\Requests\UpdateClassRequest;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Lop::all();

        return view('admin.classes.list', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.classes.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddClassRequest $request)
    {
        $data = 'Thêm thành công';
        DB::table('classes')->insert([
            'name' => $request->input('name'),
        ]);

        return view('admin.classes.add', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = DB::table('classes')
            ->join('student_class', 'classes.id', '=', 'student_class.class_id')
            ->join('students', 'student_class.student_id', '=', 'students.id')
            ->where('classes.id', $id)
            ->select('classes.name as class_name', 'students.*')
            ->get();

        return view('admin.classes.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = DB::table('classes')->where('id', $id)->first();

        return view('admin.classes.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassRequest $request, $id)
    {
        $row = DB::table('classes')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
            ]);

        return redirect()->route('classes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('classes')->where('id', $id)->delete();

        return redirect()->back();
    }
}
