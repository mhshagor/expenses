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
        Schema::create('expenses_bills', function (Blueprint $table) {
            $table->id();
			
			$table->string('code');
            $table->string('purpose');
			$table->text('details')->nullable();
			$table->double('amount', 8,2);
			// Boucher Image //
			$table->string('boucher_image');
			$table->timestamp('billing_date')->nullable();
			
            $table->foreignId('policy')->nullable()->constrained('expenses_models')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('expenses_bills');
    }
};
