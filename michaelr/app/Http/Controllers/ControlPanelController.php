<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ControlPanelController extends Controller
{
    public function getPosts()
    {
        return view('cp');
    }
}
