<?php

namespace App\Models\Model_Prac03;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    /**
     * Các cột có thể được điền giá trị (mass assignable).
     */
    protected $fillable = [
        'computer_name',
        'model',
        'operating_system',
        'processor',
        'memory',
        'available',
    ];

    /**
     * Quan hệ với bảng issues: Một máy tính có thể có nhiều vấn đề.
     */
    public function issues()
    {
        return $this->hasMany(Issue::class);
    }
}
