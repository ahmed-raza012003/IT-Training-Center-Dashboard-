<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffMembersTable extends Migration
{
    public function up()
    {
        Schema::create('staff_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('profile_picture')->nullable();
            $table->text('address');
            $table->string('designation');
            $table->string('role');
            $table->string('cnic');
            $table->string('emergency_contact');
            $table->string('bank_name');
            $table->string('bank_account_number');
            $table->date('date_of_joining');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('staff_members');
    }
}
