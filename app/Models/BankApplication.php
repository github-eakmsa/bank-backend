<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankApplication extends Model
{
    //
    protected $table = "tbl_application";

    protected $fillable = [
        'bank_name',
        'branch_name',
        'account_name',
        'account_number',
        'status',
    ];

}
