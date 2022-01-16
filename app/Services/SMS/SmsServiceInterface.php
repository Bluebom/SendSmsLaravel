<?php
namespace App\Services\SMS;

interface SmsServiceInterface {
    public function send(string $celnumber, string $msg): int;
}