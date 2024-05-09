<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assist extends Model
{
    protected $table = 'assists';
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class, 'id_student');
    }
}
