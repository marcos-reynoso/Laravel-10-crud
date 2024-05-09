<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'name',
        'last_name',
        'dni',
        'assists',
        'birthday',
        'group'
    ];
    public function assists()
    {
        return $this->hasMany(Assist::class, 'id_student', 'id');
    }
}
