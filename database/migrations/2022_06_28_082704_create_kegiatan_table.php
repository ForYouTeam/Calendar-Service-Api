<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanTable extends Migration
{
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kegiatan_id')->constrained('detail_kegiatan');
            $table->dateTime('tgl');
            $table->string('kegiatan');
            $table->string('keterangan');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
}
