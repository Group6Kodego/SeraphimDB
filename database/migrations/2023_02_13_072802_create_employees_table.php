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
            
            $table->date('date_hired');
            $table->timestamps();

            //Family Information
            $table->string('spouse')->nullable();
            $table->date('spouseBirthdate')->nullable();
            $table->string('child_1')->nullable();
            $table->string('child_1gender')->nullable();
            $table->date('child_1birthdate')->nullable();
            $table->string('child_2')->nullable();
            $table->string('child_2gender')->nullable();
            $table->date('child_2birthdate')->nullable();
            $table->string('child_3')->nullable();
            $table->string('child_3gender')->nullable();
            $table->date('child_3birthdate')->nullable();
            $table->string('child_4')->nullable();
            $table->string('child_4gender')->nullable();
            $table->date('child_4birthdate')->nullable();
            $table->string('child_5')->nullable();
            $table->string('child_5gender')->nullable();
            $table->date('child_5birthdate')->nullable();
            $table->string('fathers_name')->nullable();
            $table->date('fathersBirthdate')->nullable();
            $table->string('Mothers_name')->nullable();
            $table->date('MothersBirthdate')->nullable();

            //Educational background
            $table->string('HighSchool_Name')->nullable();
            $table->string('HighSchool_Address')->nullable();
            $table->string('hsYear')->nullable();
            $table->string('hs_Start')->nullable();
            $table->string('hs_End')->nullable();
            $table->string('hsAwards')->nullable();
            $table->string('seniorHighSchool_Name')->nullable();
            $table->string('seniorHighSchool_Address')->nullable();
            $table->string('shsYear')->nullable();
            $table->string('shs_Start')->nullable();
            $table->string('shs_End')->nullable();
            $table->string('shsAwards')->nullable();
            $table->string('college_Name')->nullable();
            $table->string('college_Address')->nullable();
            $table->string('collegeYear')->nullable();
            $table->string('college_Start')->nullable();
            $table->string('college_End')->nullable();
            $table->string('collegeAwards')->nullable();
            
            

            
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
