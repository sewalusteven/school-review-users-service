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
        Schema::create('parent_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->string("father")->nullable();
            $table->string("mother")->nullable();
            $table->string("guardian")->nullable();
            $table->string("father_phone_number")->nullable();
            $table->string("mother_phone_number")->nullable();
            $table->string("guardian_phone_number")->nullable();
            $table->string("father_email")->nullable();
            $table->string("mother_email")->nullable();
            $table->string("guardian_email")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_groups');
    }
};
