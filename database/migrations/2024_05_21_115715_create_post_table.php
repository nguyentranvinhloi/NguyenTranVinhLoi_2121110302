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
        Schema::create('nhom3_post', function (Blueprint $table) {
            $table->id(); //id
            $table->unsignedInteger('topic_id')->nullable();
            $table->string('title', 1000);
            $table->string('slug', 1000);
            $table->mediumText('detail');
            $table->string('image', 1000);
            $table->string('type', 100, ['post', 'page']);
            $table->string('description')->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedTinyInteger('status')->default(2);

            $table->timestamps(); //created_at, updated_at            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhom3_post');
    }
};
