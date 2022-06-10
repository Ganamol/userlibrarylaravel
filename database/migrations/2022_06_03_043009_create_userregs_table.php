<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserregsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userregs', function (Blueprint $table) {
            $table->id();
            $table->string('name',20)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender',20)->nullable();
            $table->string('qualification',50)->nullable();
            $table->string('hobbies',50);
            $table->string('email',50)->unique()->nullable();
            $table->string('myself',50)->nullable();
            $table->string('image',20)->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('userregs');
    }
}
