<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->text('text');
            $table->string('img1'); // Assuming you store image filenames
            $table->string('img2'); 
            $table->timestamps(); // Add timestamps if needed
        });
    }

    public function down()
    {
        Schema::dropIfExists('destinations');
    }
};
