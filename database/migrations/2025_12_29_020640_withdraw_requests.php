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
        Schema::create('withdraw_requests', function (Blueprint $table) {
    $table->id();
    $table->foreignId('vendor_id')->constrained()->cascadeOnDelete();
    $table->foreignId('withdraw_method_id')->constrained()->cascadeOnDelete();
    $table->double('total_amount');
    $table->double('withdraw_amount');
    $table->double('withdraw_charge')->default(0);

    $table->string('account_name');
    $table->string('account_number');
    $table->string('bank_name')->nullable();
    $table->enum('status', ['pending','paid','decline'])->default('pending');
    $table->text('admin_note')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraw_requests');
    }
};
