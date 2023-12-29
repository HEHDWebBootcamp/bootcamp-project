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
        Schema::create('card_assigned', function (Blueprint $table) {
            $table->foreignId('card_id')->constrained();
            $table->foreignId('board_member_id')->constrained('board_members');
            $table->primary(['card_id', 'board_member_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_assigned');
    }
};