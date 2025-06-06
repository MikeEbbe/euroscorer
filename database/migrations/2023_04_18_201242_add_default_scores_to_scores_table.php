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
        Schema::table('scores', function (Blueprint $table) {
            $table->float('performance', 3, 2)->default(0)->change();
            $table->float('song', 3, 2)->default(0)->change();
            $table->float('total', 3, 2)->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('scores', function (Blueprint $table) {
            $table->float('performance', 3, 2)->default(null)->change();
            $table->float('song', 3, 2)->default(null)->change();
            $table->float('total', 3, 2)->default(null)->change();
        });
    }
};
