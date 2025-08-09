<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class signup extends Authenticatable
{
   

   protected $fillable = [
        'registration_no', 'name_bangla', 'name', 'father_name', 'mother_name',
        'present_address', 'permanent_address', 'telephone', 'education_qualification',
        'district', 'thana', 'email', 'facebook_id', 'birthday', 'age', 'blood_group',
        'nationality', 'national_id', 'reference_id', 'member_type', 'designation','member_img', 'nid_img','password'
    ];

    

    public function getAuthPassword()
    {
        return $this->PASSWORD;
    }
}
