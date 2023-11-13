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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('pid');
            $table->string('title');
            
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('phase', ['design', 'development', 'testing', 'deployment']);
            $table->text('description');
            $table->unsignedBigInteger('uid');
            $table->foreign('uid')->references('uid')->on('users');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
