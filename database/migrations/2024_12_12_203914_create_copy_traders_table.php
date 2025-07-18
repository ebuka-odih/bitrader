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
        Schema::create('copy_traders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->string('win_rate')->nullable();
            $table->string('profit_share')->nullable();
            $table->string('win')->nullable();
            $table->string('loss')->nullable();
            $table->decimal('min_amount', 11, 2)->nullable();
            $table->decimal('max_amount', 11, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copy_traders');
    }
};
