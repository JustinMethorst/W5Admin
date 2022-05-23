<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Files', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('filename');
            $table->string('fileSort');
//            $table->dateTime('uploadDate');
//            $table->dateTime('lastAlter');
            $table->integer('shared');
            $table->string('filePath');
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
        Schema::dropIfExists('Files');
    }
};
