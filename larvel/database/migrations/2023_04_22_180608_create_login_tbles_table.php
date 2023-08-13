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
        Schema::create('login_tbles', function (Blueprint $table) {
            $table->string('log_id',10);
            $table->string('user_name',20);
            $table->string('password',100);
            $table->foreign('log_id')->references('user_id')->on('profiles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login_tbles');
    }
};
