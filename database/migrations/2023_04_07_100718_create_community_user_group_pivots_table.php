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
        Schema::create('community_user_group_pivots', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('group_id');
            $table->bigInteger('user_id');
            $table->string('group_user_role',10);
            $table->tinyInteger('user_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('community_user_group_pivots');
    }
};
