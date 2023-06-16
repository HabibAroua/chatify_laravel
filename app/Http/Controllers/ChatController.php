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
        return Inertia::render('Chat/Chat');
    }
}
