<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'date-birth', 'phone','image'
    ];

    protected $hidden = [

    ];

    public function UserData(){
        return $this->hasMany( UserData::class, 'user_id', 'id' );
    }
}
