<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table = 'soal';
    protected $primaryKey = 'id';
    protected $fillable = [
        'soal', 'jawab_a', 'jawab_b', 'jawab_c', 'jawab_d', 'jawab_e', 'kunci_jawab', 'url_audio'
    ];
}
