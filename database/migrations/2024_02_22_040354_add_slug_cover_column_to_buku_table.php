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
        Schema::table('buku', function (Blueprint $table) {
            $table->string('slug', 255)->nullable()->after('judul');
            $table->string('cover', 255)->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buku', function (Blueprint $table) {
            if (Schema::hasColumn('buku', 'slug')) {
                $table->dropColumn('slug');
            }
            if (Schema::hasColumn('buku', 'cover')) {
                $table->dropColumn('slug');
            }
        });
    }
};
