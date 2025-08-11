<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['district_name'];

    public function thanas()
    {
        return $this->hasMany(Thana::class);
    }

}
