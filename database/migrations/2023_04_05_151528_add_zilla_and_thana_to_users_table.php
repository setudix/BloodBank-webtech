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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('zilla_id')->nullable();
            $table->unsignedBigInteger('thana_id')->nullable();
            $table->foreign('zilla_id')->references('id')->on('zillas')->onDelete('set null');
            $table->foreign('thana_id')->references('id')->on('thanas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['zilla_id']);
            $table->dropForeign(['thana_id']);
            $table->dropColumn('zilla_id');
            $table->dropColumn('thana_id');
        });
    }
};
