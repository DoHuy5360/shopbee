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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char("code", 52);
            $table->string("name", 120);
            $table->string("description", 3000);
            $table->string("category", 50);
            $table->string("brand", 120);
            $table->string("origin", 120);
            $table->string("weight", 10);
            $table->string("price", 20);
            $table->integer("storage");
            $table->string("weight_packed", 10);
            $table->string("r_packed", 10);
            $table->string("d_packed", 10);
            $table->string("c_packed", 10);
            $table->boolean("pre_order")->default(false);
            $table->string("status", 20);
            $table->string("sku_code", 120);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};