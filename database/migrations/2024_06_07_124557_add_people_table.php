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
        Schema::create("people", function (Blueprint $table) {
            $table->id();
            $table->string("name", 50)->index()->nullable();
            $table->string("surname", 50)->index()->nullable();
            $table->string("address", 100)->nullable();
            $table->date('birth_date');
            $table->integer('age');
            $table->decimal('salary', 6, 2);
            $table->string('rdn', 50);
            $table->char('status', 1)->default('1');
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
