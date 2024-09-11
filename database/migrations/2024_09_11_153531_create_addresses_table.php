<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Jericdei\PsgcDatabase\Models\Barangay;
use Jericdei\PsgcDatabase\Models\City;
use Jericdei\PsgcDatabase\Models\Municipality;
use Jericdei\PsgcDatabase\Models\Province;
use Jericdei\PsgcDatabase\Models\Region;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->string('barangay');
            $table->string('zipcode');
            $table->foreignIdFor(Region::class);
            $table->foreignIdFor(Province::class);
            $table->foreignIdFor(Municipality::class)->nullable();
            $table->foreignIdFor(City::class)->nullable();
            $table->foreignIdFor(Barangay::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
