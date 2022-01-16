<?php
namespace App\Services\SMS\Providers;

use Illuminate\Support\Facades\Http;
use App\Services\SMS\SmsServiceInterface;

class InfobipProvider implements SmsServiceInterface
{
    public function send(string $celnumber, string $msg): int
    {
        $response = Http::withHeaders([
            'Authorization' => 'App 55243c432f0cc6a5d71c4fc8aed60e59-5862a9c7-3618-4eb6-a04d-9723c11163af'
        ])->post('https://wpxkr8.api.infobip.com/sms/2/text/advanced',['messages' => [
            "from" => "InfoSMS",
            "destinations" => [
                "to" => $celnumber
            ],
            "text" => $msg
        ]]);

        return $response->status();
    }
}
