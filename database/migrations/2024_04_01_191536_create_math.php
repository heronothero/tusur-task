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
        Schema::create('math', function (Blueprint $table) {
            $table->id();
            $table->float('a');
            $table->float('b');
            $table->float('c');
            $table->float('D');
            $table->float('X1');
            $table->float('X2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('math');
    }
};
