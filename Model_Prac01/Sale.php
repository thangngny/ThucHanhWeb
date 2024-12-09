<?php

namespace App\Models\Model_Prac01;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $primaryKey = 'sale_id';
    protected $fillable = ['medicine_id', 'quantity', 'sale_date', 'customer_phone'];

    // Quan hệ 1-nhiều với bảng medicines
    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id', 'medicine_id');
    }
}
