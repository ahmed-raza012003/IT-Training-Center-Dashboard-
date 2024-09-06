<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeStructuresTable extends Migration
{
    public function up()
    {
        Schema::create('fee_structures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('timing_id')->constrained()->onDelete('cascade'); // Foreign key to timings
            $table->decimal('main_fee', 10, 2); // Main fee
            $table->decimal('discount_fee', 10, 2); // Discount fee
            $table->decimal('final_fee', 10, 2); // Final fee
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fee_structures');
    }
}
