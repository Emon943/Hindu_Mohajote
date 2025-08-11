<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    protected $fillable = ['district_id', 'thana_name'];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

}
