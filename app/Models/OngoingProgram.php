<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OngoingProgram extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user_id(){
        return $this->belongsTo(User::class);
    }
    public function category_id(){
        return $this->belongsTo(ProgramService::class);
    }
    public function tutor_id(){
        return $this->belongsTo(Tutor::class);
    }
    public function program_session_id(){
        return $this->belongsTo(ProgramSession::class);
    }
    public function payment_status_id(){
        return $this->belongsTo(PaymentStatus::class);
    }
    public function tutor_notes_id(){
        return $this->hasMany(TutorNotes::class);
    }
}
