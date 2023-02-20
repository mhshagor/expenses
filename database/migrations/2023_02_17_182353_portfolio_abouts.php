<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_abouts', function (Blueprint $table) {
            $table->id();
			
            $table->string('code');
            $table->string('title');
            $table->string('score');
            $table->string('slug');
            $table->string('status')->default(false);
            $table->foreignId('assigned_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('updated_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_abouts');
    }
};
