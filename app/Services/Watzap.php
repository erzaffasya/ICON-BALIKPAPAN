<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Watzap
{
    public $url;
    public $token;
    public $channel;
    public $number;
    public function __construct()
    {
        $this->url = env('WA_URL');
        $this->token = env('WA_TOKEN');
        $this->channel = env('WA_CHANNEL_ID');
        $this->number = env('WA_NUMBER_ID');
    }

    public function sendMessage($phone, $otp)
    {
        $requestData = [
            "channelID" => $this->channel,
            "phoneNumberID" => $this->number,
            "phone" => $phone,
            "templateName" => "otp_whatsapp",
            "languageCode" => "id",
            "parameters" => [
                "header" => [],
                "body" => [
                    [
                        "name" => "otp",
                        "value" => (string)$otp
                    ]
                ],
                "footer" => [],
                "buttons" => []
            ],
            "withCase" => true,
            "topicID" => 1
        ];

        // dd(json_encode($requestData, JSON_PRETTY_PRINT));
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'API-Key' => $this->token,
            'User-Agent' => ''
        ])->post($this->url . 'api/integration/v1/inbox/send_templated_message_whatsappba', $requestData);

        $responseData = $response->json();
        // dd($responseData);
        if ($response->successful()) {
            return $responseData;
        } else {
            dd('Request failed with status: ' . $response->status());
        }
    }
}
