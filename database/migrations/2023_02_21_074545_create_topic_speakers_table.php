<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_speakers', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('speaker_id')->unsigned()->constrained()->cascadeOnUpdate()->cascadeOnDelete()->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('link')->nullable();
            $table->enum('days', ['First Day', 'Second Day' , 'Third Day'])->nullable();
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
        Schema::dropIfExists('topic_speakers');
    }
}
