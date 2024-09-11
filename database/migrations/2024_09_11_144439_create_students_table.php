<?php

use App\Models\User;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('name_extension')->nullable();
            $table->string('nickname')->nullable();
            $table->foreignIdFor(User::class);
            $table->date('birthdate');
            $table->string('birthplace');
            $table->string('gender');
            $table->double('height');
            $table->double('weight');
            $table->string('learning_reference_no');
            $table->boolean('is_pwd');
            $table->string('main_language');
            $table->string('citizenship');
            $table->string('religion');
            $table->string('civil_status');
            $table->string('ethnic_group')->nullable();
            $table->string('phone');
            $table->string('telephone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
