<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //model Eloquent

class Mahasiswa extends Model //definisi model
{
    protected $table = "mahasiswa"; //eloquent akan membuat model mahasisw menyimpan record di table mahasiswas
    public $timestamps = false;
    public $incrementing = false;
    protected $primariKey =  'nim'; //memanggil isi DB dengan primary key
    protected $fillable = ['nim','nama','kelas','jurusan','no_handphone'];
}
