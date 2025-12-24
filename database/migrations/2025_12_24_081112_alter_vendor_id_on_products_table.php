<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {

            // jika sebelumnya vendor_id NOT NULL
            $table->unsignedBigInteger('vendor_id')
                ->nullable()
                ->change();

            // hapus FK lama jika ada (aman walau belum ada)
            $table->dropForeign(['vendor_id']);

            // tambah FK baru
            $table->foreign('vendor_id')
                ->references('id')
                ->on('users')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {

            $table->dropForeign(['vendor_id']);

            $table->unsignedBigInteger('vendor_id')
                ->nullable(false)
                ->change();
        });
    }
};
