<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramService extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ongoing_programs(){
        return $this->hasMany(OngoingProgram::class, 'program_services_id');
    }
}
