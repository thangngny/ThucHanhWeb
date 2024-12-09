<?php

namespace App\Http\Controllers\Controller_Prac03;

use App\Http\Controllers\Controller;
use App\Models\Model_Prac03\Computer;

class ComputerController extends Controller
{
    // Hiển thị danh sách tất cả các máy tính
    public function index()
    {
        $computers = Computer::all(); // Lấy toàn bộ dữ liệu từ bảng computers
        return view('Views_Prac03.computers.index', compact('computers')); // Truyền dữ liệu sang view
    }
}
