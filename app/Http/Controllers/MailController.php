<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Mail;
use App\Mail\NotifyMailable;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){

    }

    public function send(Request $request){
        $email = $request->email;
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->message
        ];
        try {
            Mail::to($email)->send(new NotifyMailable($data));

            $email = new Email();
            $email->name = $request->name;
            $email->email = $request->email;
            $email->subject = $request->subject;
            $email->message = $request->message;
            $email->save();

            return view('mail.sent_successfully');
        }catch (\Exception $exception){
            return view('mail.error', compact('exception'));
        }
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
