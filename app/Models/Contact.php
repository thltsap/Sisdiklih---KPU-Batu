<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'message'
    ];

    protected $hidden = [

    ];

    public function contact(){
        return $this->hasMany( Contact::class, 'contact_id', 'id' );
    }
}
