<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Watzap
{
    public function __construct()
    {
        $this->url = env('WAT_URL');
        $this->token = env('WAT_TOKEN');
        $this->key = env('WAT_NUMBER_KEY');
    }

    public function status()
    {
        $response = $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post(sprintf('%s/checking_key', $this->url), [
            "api_key" => $this->token
        ]);

        return $response;
    }

    public function groupGrab()
    {
        $response = $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post(sprintf('%s/groups', $this->url), [
            "api_key" => $this->token,
            "number_key" =>  $this->key
        ]);

        return $response;
    }

    public function sendMessage($phone, $message)
    {

        //Taptalk
        // $response = $response = Http::withHeaders([
        //     'Content-Type' => 'application/json',
        //     "API-key" => $this->token
        // ])->post(sprintf($this->url), [
        //     'channelID' => $this->key,
        //     'messageType' => 'text',
        //     'phone' => $phone,
        //     'body' => $message
        // ]);

        //Watzapp
        $response = $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post(sprintf('%s/send_message', $this->url), [
            "api_key" => $this->token,
            'number_key' => $this->key,
            'phone_no' => $phone,
            'message' => $message
        ]);

        return $response;
    }

    public function sendMessageGroup($groupId, $message)
    {

        $response = $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post(sprintf('%s/send_message_group', $this->url), [
            "api_key" => $this->token,
            'number_key' => $this->key,
            'group_id' => $groupId,
            'message' => $message
        ]);

        return $response;
    }
}
