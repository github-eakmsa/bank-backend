<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationSaveRequest;
use App\Models\BankApplication;
use Illuminate\Http\Request;

class BankApplicationController extends Controller
{
    //
    public function saveApplication(ApplicationSaveRequest $request) {
        $app = new BankApplication();
        $app->bank_name = $request->bank_name;
        $app->branch_name = $request->branch_name;
        $app->account_name = $request->account_name;
        $app->account_number = $request->account_number;
        $app->status = $request->status;
        $app->save();
        return Response()->json($app);
    }
}
