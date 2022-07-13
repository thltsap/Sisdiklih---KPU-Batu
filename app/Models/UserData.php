<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UserData extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'birthdate', 'phone','image', 'age'
    ];

    protected $hidden = [

    ];

    public function user_datas(){
        return $this->hasMany( UserData::class, 'user_datas' );
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['birthdate'])->age;
    }   

    }
