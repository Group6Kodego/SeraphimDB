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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            
            // $table->string('image');
            $table->foreignId('department_id')->constrained()->cascadeOnDelete();
            
            // $table->foreignId('position_id')->constrained()->cascadeOnDelete();
            $table->string('employee_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->date('birth_date');
            // $table->string('age');
            $table->string('gender');
            $table->string('phone');
            $table->string('nationality');
            $table->string('address');
            $table->char('zip_code');
            $table->string('tin_id');
            $table->string('sss_id');
            $table->string('philhealth_id');
            $table->string('pagibig_id');
            $table->string('password');
            $table->date('date_hired');
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
        Schema::dropIfExists('employees');
    }
};
