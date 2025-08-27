<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('national_id', 16);
            $table->text('address');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->foreignId('category_id')->constrained('categories');
            $table->string('location');
            $table->string('date');
            $table->text('description');
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
