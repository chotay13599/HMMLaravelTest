<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;

    protected $fillable = ['year'];

    public function studentRegisters(){
        return $this->hasMany(StudentRegister::class);
    }
}
