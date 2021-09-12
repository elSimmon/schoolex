<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermSemester extends Model
{
    use HasFactory;

    protected $fillable = [
        'academic_session_id', 'name', 'start', 'finish', 'current'
    ];

    public function fees_payments(){
        return $this->hasMany(FeesPayment::class);
    }

    public function academic_session(){
        return $this->belongsTo(AcademicSession::class);
    }
}
