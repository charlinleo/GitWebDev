<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('product_name');
            $table->string('product_price');
            $table->string('brand');
            $table->string('product_desc');
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->string('imageP');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
