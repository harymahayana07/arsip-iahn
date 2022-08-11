<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('letter_id');
            $table->string('lampiran');
            $table->string('status');
            $table->string('sifat');
            $table->string('petunjuk');
            $table->string('catatan_rektor');
            $table->date('tgl_selesai');
            $table->date('tgl_aju_kembali')->nullable();
            $table->string('penerima_disposisi');
            $table->string('kepada');
            $table->string('letter_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disposisis');
    }
}
