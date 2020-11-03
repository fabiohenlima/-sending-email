<?php

namespace App\Http\Controllers\Email;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailTriggerController extends Controller
{
    public function index()
    {
        return view('email.index');
    }
}
