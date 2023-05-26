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
        Schema::create('legal_instruments', function (Blueprint $table) {
            $table->id();
            $table->string('lcr_no')->nullable();
            $table->string('register_date')->nullable();
            $table->string('document_type')->nullable();
            $table->string('execution_date')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('applicant_citizenship')->nullable();
            $table->string('applicant_birth_date')->nullable();
            $table->string('applicant_birth_place')->nullable();
            $table->string('cause_for_loss')->nullable();
            $table->string('affiant_name')->nullable();
            $table->string('affiant_citizenship_former')->nullable();
            $table->string('affiant_citizenship_aquired')->nullable();
            $table->string('acknowledge_parent_names')->nullable();
            $table->string('acknowledge_parent_date')->nullable();
            $table->string('acknowledge_parent_place')->nullable();
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
        Schema::dropIfExists('legal_instruments');
    }
};
