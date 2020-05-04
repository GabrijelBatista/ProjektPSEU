<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileModels2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_models2', function (Blueprint $table) {
            $table->id();
            $table->string('ime_i_prezime');
            $table->integer('broj_indeksa');
            $table->string('email');
            $table->string('tema');
            $table->string('mentor');
            $table->string('file_name');
            $table->string('obrana')->nullable();
            $table->date('prijava')->default(DB::raw('CURRENT_TIME'));
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
        Schema::dropIfExists('file_models2');
    }
}
