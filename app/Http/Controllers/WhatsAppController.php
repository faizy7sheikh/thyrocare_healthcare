<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ChatAPI\WhatsApp\ChatAPI;
use ChatAPI\WhatsApp\ChatAPIException;

class WhatsAppController extends Controller
{
    public function sendMessage(Request $request)
    {
        $number = $request->input('number');
        $message = $request->input('message');

        $chatApi = new ChatAPI(env('CHAT_API_TOKEN'));

        try {
            $chatApi->sendTextMessage($number, $message);
            return response()->json(['message' => 'Message sent successfully']);
        } catch (ChatAPIException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
