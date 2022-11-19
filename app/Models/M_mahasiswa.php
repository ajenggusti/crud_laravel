<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_mahasiswa extends Model
{
    protected $table='tbl_mahasiswa';
    protected $fillable = [
        'id','nrp','nama','email','alamat'
    ];
    protected $hidden;
}
