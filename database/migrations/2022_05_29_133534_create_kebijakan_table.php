<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebijakan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('deskripsi');
            $table->string('surat_kebijakan')->nullable();
            $table->string('thumbnail')->nullable();
            $table->unsignedInteger('discount')->nullable();
            $table->timestamp('masa_berlaku');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kebijakan');
    }
};
