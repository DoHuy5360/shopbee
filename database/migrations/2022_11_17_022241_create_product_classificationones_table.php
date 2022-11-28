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
        Schema::create('product_classificationones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char("product_code", 52);
            $table->char("code", 52);
            $table->string("name", 120);
            $table->string("path", 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_classificationones');
    }
};
