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
        Schema::table('users', function (Blueprint $table) {
            $table->char('code', 52);
            $table->string('avatar', 300)->default('assets/img/user/_bee_user_default_avatar.jpg');
            $table->string('phone', 20)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('birthday', 20)->nullable();
            $table->string('real_name', 120)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
