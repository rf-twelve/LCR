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
        Schema::create('court_decree_orders', function (Blueprint $table) {
            $table->id();
            $table->string('lcr_no')->nullable();
            $table->string('register_date')->nullable();
            $table->string('document_type')->nullable();
            $table->string('subject_name')->nullable();
            $table->string('subject_citizenship')->nullable();
            $table->string('petitioner_name')->nullable();
            $table->string('petitioner_citizenship')->nullable();
            $table->string('court_name')->nullable();
            $table->string('special_proceeding_no')->nullable();
            $table->string('date_issued')->nullable();
            $table->string('judge_name')->nullable();
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
        Schema::dropIfExists('court_decree_orders');
    }
};
