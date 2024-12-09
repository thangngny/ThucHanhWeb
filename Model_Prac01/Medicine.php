<?php

namespace App\Models\Model_Prac01;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $table = 'medicines'; // Tên bảng trong database
    protected $primaryKey = 'medicine_id'; // Khóa chính (nếu không phải 'id')
    public $timestamps = false; // Nếu bảng không có cột `created_at` và `updated_at`
}

