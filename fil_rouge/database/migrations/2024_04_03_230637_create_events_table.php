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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->enum('event_type',['venue', 'online']);
            $table->date('date');
            $table->time('time');
            $table->decimal('price');
            $table->integer('nbr_place');
            $table->text('description');
            $table->string('image');

            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedBigInteger('creator');
            $table->foreign('creator')->references('id')->on('users')->onDelete('cascade');

            $table->enum('status', ['En attente', 'Public', 'Decline'])->default('En attente');

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
        Schema::dropIfExists('events');
    }
};
