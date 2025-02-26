<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('status')->default('pending');
            $table->unsignedBigInteger('assigned_to'); // Foreign key for user
            $table->string('github_repo')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
