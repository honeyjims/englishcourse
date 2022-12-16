<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'register_course';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 'name', 'email', 'jenis_kelamin', 'status', 'school_name', 'address', 'no_hp'
    ];

    public function hasUser(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
