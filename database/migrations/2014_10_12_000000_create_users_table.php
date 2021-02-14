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
            $table->string('name');
            $table->string('surname');/* New */
            $table->string('job');    /* New */
            $table->string('nationality');    /* New */
            $table->string('natID');    /* New */
            $table->string('Address01');    /* New */
            $table->string('Address02');    /* New */
            $table->string('Address03');    /* New */

            $table->integer('salary');    /* New */
            $table->integer('salary');    /* New */
            $table->integer('salary');    /* New */
            $table->integer('salary');    /* New */
            $table->integer('salary');    /* New */

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
