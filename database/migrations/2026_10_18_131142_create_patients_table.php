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
    Schema::create('patients', function (Blueprint $table) {
        $table->id();
        $table->string('patient_number', 50)->unique();
        $table->string('first_name', 100);
        $table->string('last_name', 100);
        $table->date('birth_date');
        $table->string('sex', 10); // Stores 'Male' or 'Female'
        $table->string('contact_number', 30)->nullable();
        $table->text('address')->nullable(); // 'text' is great for longer strings like addresses
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
