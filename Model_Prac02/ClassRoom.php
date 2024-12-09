<?php

namespace App\Models\Model_Prac02;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    protected $table = 'classes'; // Tên bảng

    protected $fillable = ['grade_level', 'room_number'];

    // Thiết lập mối quan hệ với Student
    public function students()
    {
        return $this->hasMany(Student::class, 'class_id', 'id');
    }
}
