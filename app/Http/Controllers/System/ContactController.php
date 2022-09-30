<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $contact = Contact::find(auth()->user()->id);
        return view('system.contact.index', compact('contact'));
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request){
        $contact = Contact::find(auth()->user()->id);
        $contact->description = $request->description;
        $contact->save();

        return redirect()->route('system.contact.index');
    }

    public function destroy($id){

    }
}
