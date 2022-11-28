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
        Schema::create('bill_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char("code",52);
            $table->char("bill_code",52);
            $table->char("product_code",52);
            $table->string("name",120);
            $table->string("path",500);
            $table->integer("price");
            $table->integer("amount");
            $table->integer("total");
            $table->string("status",120)->default("wait_confirm");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_products');
    }
};
