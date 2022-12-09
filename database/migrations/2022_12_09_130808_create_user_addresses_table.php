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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('code', 52);
            $table->char('user_code', 52);
            $table->string('receiver',120);
            $table->string('province',300);
            $table->string('district',300);
            $table->string('wards',300);
            $table->string('detail',1000);
            $table->string('phone', 20);
            $table->string('type', 30);
            $table->boolean('default_address')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addresses');
    }
};
