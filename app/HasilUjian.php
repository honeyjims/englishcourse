<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilUjian extends Model
{
    protected $table = 'hasil_ujian';
    protected $fillable = ['user_id', 'jumlah_soal', 'jawaban_benar', 'jawaban_salah', 'nilai', 'grade'];

    public function hasUser(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
