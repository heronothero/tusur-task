<?php
declare(strict_types=1);
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
        Schema::create('maths', function (Blueprint $table) {
            $table->id();
            $table->float('a');
            $table->float('b');
            $table->float('c');
            $table->char('D');
            $table->char('X1');
            $table->char('X2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maths');
    }
};
