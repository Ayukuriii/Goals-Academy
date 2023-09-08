<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'status',
        'ongoing_program_id',
        'jsonstring'
    ];

    public function ongoing_program()
    {
        return $this->hasOne(OngoingProgram::class, 'order_detail_id');
    }
}
