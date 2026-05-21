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
        Schema::table('donates', function (Blueprint $table) {
            $table->dropForeign(['gacha_id']);
             $table->foreign('gacha_id')
                ->references('id')
                ->on('gachas')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('donates', function (Blueprint $table) {
            //
        });
    }
};
