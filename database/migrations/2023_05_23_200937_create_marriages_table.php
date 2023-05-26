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
        Schema::create('marriages', function (Blueprint $table) {
            $table->id();
            $table->string('register_date')->nullable();
            $table->string('register_no')->nullable();
            $table->string('husband_name')->nullable();
            $table->string('husband_age')->nullable();
            $table->string('husband_nationality')->nullable();
            $table->string('husband_status')->nullable();
            $table->string('husband_residence')->nullable();
            $table->string('husband_fathers_name')->nullable();
            $table->string('husband_fathers_nationality')->nullable();
            $table->string('husband_mothers_name')->nullable();
            $table->string('husband_mothers_nationality')->nullable();
            $table->string('wife_name')->nullable();
            $table->string('wife_age')->nullable();
            $table->string('wife_nationality')->nullable();
            $table->string('wife_status')->nullable();
            $table->string('wife_residence')->nullable();
            $table->string('wife_fathers_name')->nullable();
            $table->string('wife_fathers_nationality')->nullable();
            $table->string('wife_mothers_name')->nullable();
            $table->string('wife_mothers_nationality')->nullable();
            $table->string('marriage_place')->nullable();
            $table->string('marriage_date')->nullable();
            $table->string('remarks')->nullable();
            $table->string('encoder')->nullable();
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
        Schema::dropIfExists('marriages');
    }
};
