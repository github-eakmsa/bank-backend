<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    //
    protected $table = "tbl_bank";

    protected $fillable = [
        'value'
    ];

    public function branches(){
        return $this->hasMany(Branch::class);
    }

}
