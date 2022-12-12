<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('email', 64)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('isAdmin')->nullable();
            $table->string('password', 64);
            $table->string('perguruan_tinggi', 64)->nullable();
            $table->integer('npm')->nullable();
            $table->string('jurusan', 128)->nullable();
            $table->string('program_studi', 128)->nullable();
            $table->string('semester', 8)->nullable();
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
        Schema::dropIfExists('users');
    }
}
