<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutlettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letterouts', function (Blueprint $table) {
            $table->id();
            $table->string('letter_no');
            $table->date('letterout_date');
            $table->string('regarding');
            $table->string('purpose');
            $table->string('letter_file');
            $table->string('letter_type');
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
        Schema::dropIfExists('outletters');
    }
}
