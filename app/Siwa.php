<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siwa extends Model
{
    protected $hidden=['created_at', 'updated_at'];
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable =['nama_siswa','alamat_siswa','no_telpon','jurusan','created_at', 'updated_at'];
}
