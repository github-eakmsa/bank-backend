<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    protected $table = "tbl_branch";

    protected $fillable = [
        'value',
        'bank_id',
    ];

    public function bank(){
        return $this->belongsTo(Bank::class);
    }

}
