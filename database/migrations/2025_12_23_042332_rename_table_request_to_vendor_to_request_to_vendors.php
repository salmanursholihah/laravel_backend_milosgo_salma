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
        Schema::rename('request_to_vendor', 'request_to_vendors');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('request_to_vendors', 'request_to_vendor');
    }
};
