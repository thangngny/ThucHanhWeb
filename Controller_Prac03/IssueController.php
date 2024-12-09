<?php

namespace App\Http\Controllers\Controller_Prac03;

use App\Http\Controllers\Controller;
use App\Models\Model_Prac03\Issue;

class IssueController extends Controller
{
    // Hiển thị danh sách tất cả các vấn đề
    public function index()
    {
        $issues = Issue::with('computer')->get(); // Lấy toàn bộ dữ liệu từ bảng issues, bao gồm thông tin máy tính liên quan
        return view('Views_Prac03.issues.index', compact('issues')); // Truyền dữ liệu sang view
    }
}
