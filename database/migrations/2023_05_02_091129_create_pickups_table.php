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
        Schema::create('pickups', function (Blueprint $table) {
            
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string("nama");
            $table->string("kecamatan");
            $table->string("alamat");
            $table->string("phone");
            $table->string("email");
            $table->string("jenissampah");
            $table->string("beratsampah");
            $table->string("harga")->nullable();
            $table->string("poin")->nullable();
            $table->string("status")->default(0);
            $table->string("image")->nullable();
            $table->string("driver_id")->nullable();
            $table->string("driver_name")->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pickups');
    }
};
