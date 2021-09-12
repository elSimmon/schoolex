<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 'middlename', 'surname', 'dob', 'student_number', 'date_admitted', 'status', 'class_level_id',
    ];

    public function fees_payments(){
        return $this->hasMany(FeesPayment::class);
    }

    public function class_level(){
        return $this->belongsTo(ClassLevel::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
