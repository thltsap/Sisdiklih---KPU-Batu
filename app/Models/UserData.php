<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'date', 'phone','image'
    ];

    protected $hidden = [

    ];

    public function user_datas(){
        return $this->hasMany( UserData::class, 'user_datas' );
    }
}
