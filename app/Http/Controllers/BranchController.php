<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    //
    public function branches(Request $request, $bankID) {
        return Branch::where('bank_id', '=', $bankID)->get();
    }

}
