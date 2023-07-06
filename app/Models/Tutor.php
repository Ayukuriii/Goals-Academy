<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ongoing_program()
    {
        return $this->hasMany(OngoingProgram::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
