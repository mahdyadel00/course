<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('name');
            $table->text('roles_name')->default('user');
            $table->date('birthdate')->nullable();
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('instgram_id')->nullable();
            $table->string('linkedin_id')->nullable();
            $table->string('marketing_id')->nullable();
            $table->string('country_id')->nullable();
            $table->string('city_id')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('education')->nullable();
            $table->string('qulification')->nullable();
            $table->enum('english' , ['Elementary' , 'Intermediate' , 'Advanced'])->nullable();
            $table->tinyinteger('fill_survy')->nullable();
            $table->tinyinteger('policies')->nullable();
            $table->string('image')->nullable();
            $table->string('qr_code')->nullable();
            $table->string('cv')->nullable();
            $table->string('identy')->nullable();
            $table->string('key_api')->nullable();
            $table->string('task')->nullable();
            $table->string('notes')->nullable();
            $table->integer('phone')->nullable();
            $table->string('pin_code')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
