<?php

namespace App\Http\Controllers\Controller_Prac02;

use App\Http\Controllers\Controller;
use App\Models\Model_Prac02\Student;

class StudentController extends Controller
{
    // Hiển thị danh sách sinh viên
    public function index()
    {
        $students = Student::with('classRoom')->get(); // Lấy tất cả sinh viên cùng với lớp của họ
        return view('Views_Prac02.students.index', compact('students'));
    }

    // Hiển thị chi tiết sinh viên
    public function show($id)
    {
        $student = Student::with('classRoom')->findOrFail($id);
        return view('Views_Prac02.students.show', compact('student'));
    }
}
