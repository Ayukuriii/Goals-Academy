<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OngoingProgram extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function program()
    {
        return $this->belongsTo(ProgramService::class, 'program_services_id');
    }
    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'tutor_id');
    }
    public function payment_status()
    {
        return $this->belongsTo(PaymentStatus::class);
    }
    public function tutor_notes()
    {
        return $this->hasMany(TutorNotes::class);
    }
    public function orderDetail()
    {
        return $this->belongsTo(OrderDetail::class);
    }
}
