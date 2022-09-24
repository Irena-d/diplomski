<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    public function send(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'message' => $request->message
        );

        Mail::to('irena97ms@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for conntacting us!');
    }
}
