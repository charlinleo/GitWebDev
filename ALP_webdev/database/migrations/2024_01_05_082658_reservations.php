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
            $table->unsignedBigInteger('rp_id')->index()->after('status_id');
            $table->foreign('rp_id')->references('id')->on('reservation_products')->onDelete('cascade');
            $table->unsignedBigInteger('rs_id')->index()->after('rp_id');
            $table->foreign('rs_id')->references('id')->on('reservation_services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('rp_id');
            $table->dropColumn('rs_id');
        });
    }
};
