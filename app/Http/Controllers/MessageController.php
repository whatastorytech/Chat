<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Events\MessageCreated;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::with(['user'])->get();

        return response()->json($messages);
    }

    public function store(Request $request)
<<<<<<< HEAD
    {   

        
=======
    {
>>>>>>> 68fc643d59c3335f57e966d5f230159ef061bfda
        $message = $request->user()->messages()->create([
            'body' => $request->body
        ]);

        broadcast(new MessageCreated($message))
                ->toOthers();

        return response()->json($message);
    }
}
