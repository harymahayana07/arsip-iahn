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
            $table->string('petunjuk')->nullable();
            $table->text('catatan_rektor')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->date('tgl_aju_kembali')->nullable();
            $table->string('penerima_disposisi_2')->nullable();
            $table->string('kepada')->nullable();
            $table->string('kepada_2')->nullable();
            $table->text('petunjuk_kpd_1')->nullable();
            $table->text('petunjuk_kpd_2')->nullable();
            $table->date('tgl_selesai_2')->nullable();
            $table->date('tgl_selesai_3')->nullable();
            $table->string('penerima_2')->nullable();
            $table->string('penerima_3')->nullable();
            $table->string('letter_file')->nullable();
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
