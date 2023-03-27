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
        Schema::create('doc_trackings', function (Blueprint $table) {
            $table->id();
            $table->string('action')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status')->nullable();
            $table->string('assigned_to')->nullable();
            $table->string('deadline')->nullable();
            $table->string('on_transit')->nullable();
            $table->string('time_elapse')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('doc_id')->index();
            $table->unsignedBigInteger('office_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('doc_id')
                ->references('id')
                ->on('docs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('office_id')
                ->references('id')
                ->on('offices')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_trackings');
    }
};
