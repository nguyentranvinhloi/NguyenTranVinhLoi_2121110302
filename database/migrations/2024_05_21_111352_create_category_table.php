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
        Schema::create('ntvl_category', function (Blueprint $table) {
            $table->id();//id, AI, key, Integer
            $table->string('name',1000);
            $table->string('slug',1000)->nullable();
            $table->string('image',1000)->nullable();
            $table->unsignedInteger('parent_id')->default(0);
            $table->unsignedInteger('sort_order')->default(0);
            $table->string('description')->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedTinyInteger('status')->default(2);

            $table->timestamps();//created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ntvl_category');
    }
};
