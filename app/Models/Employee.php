<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'image',
        'employee_id',
        'first_name',
        'middle_name',
        'last_name',
        'birth_date',
        'gender',
        'phone',
        'nationality',
        'address',
        'department_id',
        'zip_code',
        'sss_id',
        'tin_id',
        'pagibig_id',
        'philhealth_id',
        'date_hired',
        'HighSchool_Name',
        'HighSchool_Address',
        'hsYear',
        'hs_Start',
        'hs_End',
        'hsAwards',
        'seniorHighSchool_Name',
        'seniorHighSchool_Address',
        'shsYear',
        'shs_Start',
        'shs_End',
        'shsAwards',
        'college_Name',
        'college_Address',
        'collegeYear',
        'college_Start',
        'college_End',
        'collegeAwards',
    ];
    /* public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    } */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
