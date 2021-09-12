<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesPayment extends Model
{
    use HasFactory;

    protected $fillable = [
      'student_id', 'academic_session_id', 'term_semester_id', 'amount', 'transaction_id', 'status', 'student_number',
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function academic_session(){
        return $this->belongsTo(AcademicSession::class);
    }

    public function term_semester(){
        return $this->belongsTo(TermSemester::class);
    }
}
