<?php

namespace App\Models\Model_Prac03;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    /**
     * Các cột có thể được điền giá trị (mass assignable).
     */
    protected $fillable = [
        'computer_id',
        'reported_by',
        'reported_date',
        'description',
        'urgency',
        'status',
    ];

    /**
     * Quan hệ với bảng computers: Một vấn đề thuộc về một máy tính.
     */
    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }
}
