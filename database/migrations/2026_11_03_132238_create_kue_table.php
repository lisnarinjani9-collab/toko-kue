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
        Schema::create('kue', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kue', 100);
            $table->bigInteger('harga_kue')->unsigned();
            $table->integer('stok_kue')->unsigned();
            $table->enum('kategori_kue', ['Cake', 'Brownies', 'Kue Kering', 'Donat'])->default('Cake');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kue');
    }
};
