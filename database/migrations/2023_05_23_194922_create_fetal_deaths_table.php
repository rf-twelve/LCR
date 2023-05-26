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
        Schema::create('fetal_deaths', function (Blueprint $table) {
            $table->id();
            $table->string('lcr_no')->nullable();
            $table->string('register_date')->nullable();
            $table->string('deceased_first_name')->nullable();
            $table->string('deceased_middle_name')->nullable();
            $table->string('deceased_last_name')->nullable();
            $table->string('sex')->nullable();
            $table->string('age')->nullable();
            $table->string('age_type')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('residence')->nullable();
            $table->string('occupation')->nullable();
            $table->string('death_date_time_day')->nullable();
            $table->string('death_date_time_month')->nullable();
            $table->string('death_date_time_year')->nullable();
            $table->string('death_date_time_time')->nullable();
            $table->string('death_place')->nullable();
            $table->string('death_cause')->nullable();
            $table->string('certifying_officer_name')->nullable();
            $table->string('certifying_officer_designation')->nullable();
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
        Schema::dropIfExists('fetal_deaths');
    }
};
