<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->text('penjelasan');
            $table->string('laporan_kejadian');
            $table->date('waktu_kejadian');
            $table->string('lokasi_kejadian');
            $table->string('nama_terlapor');
            $table->string('status_terlapor');
            $table->string('nama_pihak_lain');
            $table->string('status_pihak_lain');
            $table->string('saksi')->nullable();
            $table->string('status_saksi')->nullable();
            $table->text('kronologi');
            $table->string('kerugian');
            $table->string('dokumentasi');
            $table->string('informasi');
            $table->timestamps();
            $table->string('status')->default('1');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
