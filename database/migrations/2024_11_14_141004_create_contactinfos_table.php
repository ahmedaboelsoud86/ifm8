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
        Schema::create('contactinfos', function (Blueprint $table) {
            $table->id();
            $table->longText("adress");
            $table->string("statistics",  100);
            $table->string("phone",   50);
            $table->string("email",  50);
            $table->string("whatsapp",  100)->nullable();
            $table->string("linkedin",  100)->nullable();
            $table->string("youtube",  100)->nullable();
            $table->string("instagram",  100)->nullable();
            $table->string("facebok",  100)->nullable();
            $table->string("twitter",  100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactinfos');
    }
};
