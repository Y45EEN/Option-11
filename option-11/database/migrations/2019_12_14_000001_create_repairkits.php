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
<<<<<<<< HEAD:option115/vendor/laravel/framework/src/Illuminate/Database/Migrations/stubs/migration.create.stub
        Schema::create('{{ table }}', function (Blueprint $table) {
            $table->id();
========
        Schema::create('repairkits', function (Blueprint $table) {
            $table->bigIncrements('repairkitsid')->unsigned();
            $table->string('productname');
            $table->string('description');
            $table->decimal('price', 8, 2);
            $table->integer('stockquantity');
            $table->string('imageURL');
            $table->string('category');
            $table->string('CompatibleWithType');
>>>>>>>> upstream/main:option-11/database/migrations/2019_12_14_000001_create_repairkits.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:option115/vendor/laravel/framework/src/Illuminate/Database/Migrations/stubs/migration.create.stub
        Schema::dropIfExists('{{ table }}');
========
        Schema::dropIfExists('repairkits');
>>>>>>>> upstream/main:option-11/database/migrations/2019_12_14_000001_create_repairkits.php
    }
};
