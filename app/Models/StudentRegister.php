<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegister extends Model
{
    use HasFactory;

    public function academic(){
        return $this->belongsTo(Academic::class);
    }

    public function program(){
        return $this->belongsTo(Program::class);
    }
}
