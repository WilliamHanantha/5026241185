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
        Schema::create('crypto', function (Blueprint $table) {
            $table->increments('kodecrypto');  // INT AutoNumber
            $table->string('nama', 30);  // VARCHAR(30)
            $table->string('ticker', 30);  // VARCHAR(30)
            $table->integer('harga');    // INT
            $table->integer('mc');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('crypto');
    }
};
