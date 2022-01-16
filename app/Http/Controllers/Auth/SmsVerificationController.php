<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SMS\SmsServiceInterface;

class SmsVerificationController extends Controller
{
    public function send(string $number, SmsServiceInterface $smsService)
    {
        $code = \mt_rand(10000,99999);

        session(['code' => $code]);

        $response = $smsService->send($number, "Seu codigo de acesso e: $code");

        if($response == 200){
            return 'ok';
        }

        return response('Não enviado', $response);
    }
}
