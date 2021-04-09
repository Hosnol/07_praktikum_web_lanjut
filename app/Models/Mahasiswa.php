<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; //model Eloquent
use App\Models\Kelas;
use App\Models\Matakuliah;


class Mahasiswa extends Model //definisi model
{
    protected $table = "mahasiswa"; //eloquent akan membuat model mahasisw menyimpan record di table mahasiswas
    public $timestamps = false;
    public $incrementing = false;
    //protected $primaryKey = 'nim'; //memanggil isi DB dengan primary key
    protected $fillable = ['nim','nama','kelas','jurusan','tgl_lahir','email','no_handphone'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function matakuliah()
    {
        return $this->belongsToMany(Matakuliah::class)->withPivot('nilai');
    }

}