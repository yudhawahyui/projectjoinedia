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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('pendaftarans_id')->constrained('pendaftarans')->onDelete('cascade')->nullable();
            $table->string('doc_no')->nullable();
            $table->text('description')->nullable();
            $table->integer('amount')->default(0);
            $table->string('payment_status')->nullable();
            $table->text('payment_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};