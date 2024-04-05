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
        Schema::create('tapete', function (Blueprint $table) {
            $table->id();
            $table->char('estampa', 9);
            $table->boolean('limpo');
            $table->boolean('novo');
            $table->boolean('voador');
            $table->boolean('magico');
            $table->char('tamanho', 13);
            $table->integer('quantidade');
            $table->tinyText('observacao')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tapete');
    }
};
