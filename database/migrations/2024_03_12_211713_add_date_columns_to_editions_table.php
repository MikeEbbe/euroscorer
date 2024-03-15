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
        Schema::table('editions', function (Blueprint $table) {
            $table->datetime('semi_final_1_date')->nullable();
            $table->datetime('semi_final_2_date')->nullable();
            $table->datetime('final_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::table('editions', function (Blueprint $table) {
            $table->dropColumn([
                'semi_final_1_date',
                'semi_final_2_date',
                'final_date'
            ]);
        });

        Schema::enableForeignKeyConstraints();
    }
};
