<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notes', function (Blueprint $table) {
            //
            $table->id("id");
            $table->string("title");
            $table->string("content");
            $table->integer("user_id");

            //mark foreginn 
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists("notes");
    }
};
