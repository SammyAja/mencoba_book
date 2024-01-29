<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mencoba_Controller extends Controller
{
    public function index()
    {
        return json_encode([
            'message' => 'hello world'
        ]);
    }
}
