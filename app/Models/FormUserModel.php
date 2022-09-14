<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormUserModel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'address', 'birthdate', 'phone','nik', 'age'
    ];
}
