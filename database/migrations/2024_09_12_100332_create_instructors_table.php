<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('emergency_phone');
            $table->string('cnic');
            $table->string('father_name');
            $table->text('address');
            $table->string('bank_name'); // Add this line for bank name
            $table->string('profile_picture')->nullable();
            $table->string('account_number'); // Add this line for account number
            $table->string('technology');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
           
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
        Schema::dropIfExists('instructors');
    }
}
