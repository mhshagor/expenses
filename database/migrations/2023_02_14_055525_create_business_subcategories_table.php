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
        Schema::create('business_subcategories', function (Blueprint $table) {
            $table->id();
			
			$table->string('code');
            $table->string('subcategory_name');
            $table->string('slug');
            $table->string('subcategory_image')->nullable();
            $table->string('visibility')->default(false);
			
            $table->foreignId('category_id')->constrained('business_categories')->onUpdate('cascade')->onDelete('cascade');
			
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
        Schema::dropIfExists('business_subcategories');
    }
};
