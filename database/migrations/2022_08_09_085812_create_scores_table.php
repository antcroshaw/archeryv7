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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('round_id')
            ->constrained('rounds')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('archer_id')
            ->constrained('archers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('location')->required;
            $table->bigInteger('score')->required;
            $table->timestamps();
        });
        //new comment to change datetime
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
};
