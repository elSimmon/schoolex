<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicSession extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'start', 'finish', 'tuition_fee', 'current',
    ];

    public function term_semesters(){
        return $this->hasMany(TermSemester::class);
    }

    public function fees_payments(){
        return $this->hasMany(FeesPayment::class);
    }
}
