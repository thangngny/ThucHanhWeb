<?php

namespace App\Http\Controllers\Controller_Prac02;

use App\Http\Controllers\Controller;
use App\Models\Model_Prac02\ClassRoom;

class ClassRoomController extends Controller
{
    // Hiển thị danh sách lớp học
    public function index()
    {
        $classes = ClassRoom::with('students')->get(); // Lấy tất cả lớp học cùng sinh viên
        return view('Views_Prac02.classes.index', compact('classes'));
    }

    // Hiển thị chi tiết lớp học
    public function show($id)
    {
        $class = ClassRoom::with('students')->findOrFail($id); // Tìm lớp học theo ID
        return view('Views_Prac02.classes.show', compact('class'));
    }
}
