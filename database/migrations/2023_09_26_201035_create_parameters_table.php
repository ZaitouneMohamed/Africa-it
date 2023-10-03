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
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->text("adresse")->nullable();
            $table->string("phone")->nullable();
            $table->string("small_about")->nullable();
            $table->text("about")->nullable();
            $table->string("facebook")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("instagram")->nullable();
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
        Schema::dropIfExists('parameters');
    }
};
