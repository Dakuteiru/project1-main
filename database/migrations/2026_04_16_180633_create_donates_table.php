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
        Schema::create('donates', function (Blueprint $table) {
            $table->id();

            $table->string('name'); 
            $table->text('type')->nullable();
            $table->boolean('status')->default(false);
            $table->double('cost')->nullable();

            $table->bigInteger('gacha_id');

            $table->foreign('gacha_id')
                ->references('id')
                ->on('gachas')
                ->cascadeOnUpdate()
                ->nullOnDelete();

             $table->index('gacha_id');


             $table->bigInteger('user_id');
             $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->cascadeOnUpdate()
            ->nullOnDelete();

             $table->index('user_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donates');
    }
};
