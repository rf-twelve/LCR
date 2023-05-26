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
        Schema::create('live_births', function (Blueprint $table) {
            $table->id();
            $table->string('lcr_no')->nullable();
            $table->string('register_date')->nullable();
            $table->string('child_first_name')->nullable();
            $table->string('child_middle_name')->nullable();
            $table->string('child_last_name')->nullable();
            $table->string('sex')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('birth_date_time_day')->nullable();
            $table->string('birth_date_time_month')->nullable();
            $table->string('birth_date_time_year')->nullable();
            $table->string('birth_date_time_time')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('birth_type')->nullable();
            $table->string('birth_order')->nullable();
            $table->string('mother_first_name')->nullable();
            $table->string('mother_middle_name')->nullable();
            $table->string('mother_last_name')->nullable();
            $table->string('mother_age')->nullable();
            $table->string('mother_nationality')->nullable();
            $table->string('mother_religion')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('father_middle_name')->nullable();
            $table->string('father_last_name')->nullable();
            $table->string('father_age')->nullable();
            $table->string('father_nationality')->nullable();
            $table->string('father_religion')->nullable();
            $table->string('parents_marriage_day')->nullable();
            $table->string('parents_marriage_month')->nullable();
            $table->string('parents_marriage_year')->nullable();
            $table->string('parents_marriage_place')->nullable();
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
        Schema::dropIfExists('live_births');
    }
};
