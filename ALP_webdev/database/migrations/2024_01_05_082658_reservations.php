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
        Schema::table('reservations', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->index()->after('status_id');
            $table->foreign('product_id')->references('id')->on('reservation_products')->onDelete('cascade');
            $table->unsignedBigInteger('service_id')->index()->after('product_id');
            $table->foreign('service_id')->references('id')->on('reservation_services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('product_id');
            $table->dropColumn('service_id');
        });
    }
};
