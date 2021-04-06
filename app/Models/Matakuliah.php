<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa_Matakuliah;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';

    public function mahasiswa_matakuliah()
    {
        return $this->belongsToMany(Mahasiswa_Matakuliah::class);
    }
}
