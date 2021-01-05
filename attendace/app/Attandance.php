<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attandance extends Model
{
 
    //

    protected $guarded =[];

    public function detail(){
        return $this->hasMany(AttandanceDetail::class);
    }

}
