<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MahasiswaMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa_matakuliah', function(Blueprint $table) {
            $table->id();
            $table->foreign('mahasiswa_id',20)->references('nim')->on('mahasiswa');
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah');
            $table->integer('nilai');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
