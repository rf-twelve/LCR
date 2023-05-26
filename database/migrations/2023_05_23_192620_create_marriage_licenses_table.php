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
        Schema::create('marriage_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('register_no')->nullable();
            $table->string('filing_date')->nullable();
            $table->string('posting_period_from')->nullable();
            $table->string('posting_period_to')->nullable();
            $table->string('husband_name')->nullable();
            $table->string('husband_birthdate')->nullable();
            $table->string('husband_nationality')->nullable();
            $table->string('husband_civil_status')->nullable();
            $table->string('husband_residence')->nullable();
            $table->string('wife_name')->nullable();
            $table->string('wife_birthdate')->nullable();
            $table->string('wife_nationality')->nullable();
            $table->string('wife_civil_status')->nullable();
            $table->string('wife_residence')->nullable();
            $table->string('marriage_license_no')->nullable();
            $table->string('marriage_license_date_issue')->nullable();
            $table->string('marriage_license_date_expiry')->nullable();
            $table->string('marriage_license_date_release')->nullable();
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
        Schema::dropIfExists('marriage_licenses');
    }
};
