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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('catagory_id')->nullable();
            $table->string('title')->nullable();
            $table->string('sulg')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('catagory_name')->nullable();

            $table->string('user_id')->nullable();
            $table->tinyInteger('facade')->default('0');
            $table->string('post_status')->nullable();
            $table->string('usertype')->nullable();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
