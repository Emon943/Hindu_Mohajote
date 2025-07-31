<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class signup extends Model
{
   

   protected $fillable = [
        'registration_no', 'name_bangla', 'name', 'father_name', 'mother_name',
        'present_address', 'permanent_address', 'telephone', 'education_qualification',
        'parliamentary_seat', 'email', 'facebook_id', 'birthday', 'age', 'blood_group',
        'nationality', 'national_id', 'reference_id', 'member_type', 'member_img', 'nid_img','password'
    ];
}
