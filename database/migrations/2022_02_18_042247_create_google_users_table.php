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
        Schema::create('google_users', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('iss');
            // $table->string('sub');
            // $table->string('azp');
            // $table->string('aud');
            // $table->string('iat');
            // $table->string('exp');
            $table->string('email');
            $table->string('email_verified');
            $table->string('name');
            $table->string('picture');
            $table->string('given_name');
            $table->string('family_name');
            $table->string('locale');
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
        Schema::dropIfExists('google_users');
    }
};
