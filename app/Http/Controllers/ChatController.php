<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatController extends Controller
{
    /**
     * Chat View
     * @return \Inertia\Response
     */

    public function index()
    {
        event(new App\Events\MessageSent(["data" => "Hello Habib"]));
        return Inertia::render('Chat/Chat');
    }
}
