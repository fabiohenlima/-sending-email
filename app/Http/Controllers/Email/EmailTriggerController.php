<?php

namespace App\Http\Controllers\Email;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\TriggerMail;
class EmailTriggerController extends Controller
{

    public function index()
    {
        return view('email.index');
    }

    public function disparity(Request $request)
    {
        Mail::to($request->recipient)->send(new TriggerMail($request->recipient,$request->subject,$request->message));
        return redirect()->route('email.index')->with('success',"E-mail Enviado para {$request->recipient}, com sucesso!");
    }
}
