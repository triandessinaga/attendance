<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttandanceDetail extends Model
{
    protected $guarded = [];

    public function attandance(){
        return $this->belongsTo(Attandance::class);
    }
}
