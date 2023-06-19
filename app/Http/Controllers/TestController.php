<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        event(new App\Events\MessageSent(["data" => "Hello Habib"]));
    }
}
