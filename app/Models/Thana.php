<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    protected $fillable = ['district_id', 'name'];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

}
