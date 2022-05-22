<?php

namespace App\Http\Controllers\Api\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xendit\Xendit;

class XenditController extends Controller
{
    //
    private $token = 'xnd_development_kZ05i25VxE6vw5U1yG5snFhQrADqswRJozCBqam9AQbSj1XscS1R6BwLy5j1LU';

    public function getListVa() {

        Xendit::setApiKey($this->token);

        $getVABanks = \Xendit\VirtualAccounts::getVABanks();

        return response()->json([
            'data' => $getVABanks
        ])->setStatusCode(200);
    }
}
