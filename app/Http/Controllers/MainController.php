<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;
use App\Contact;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function formdata()
    {
        $contacts = new ContactModel();
        return view('formdata', ['contacts' => $contacts->all()]);
    }





    public function formdata_check(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:4|max:50',
            'company' => 'required|min:4|max:25',
            'phonenumber' => 'required|min:4|max:25',
            'email' => 'required|min:4|max:25',
            'birthdate' => 'required|min:4|max:12',
        ]);
        $contact = new ContactModel();

        $contact->name = $request->input('name');
        $contact->company = $request->input('company');
        $contact->phonenumber = $request->input('phonenumber');
        $contact->email = $request->input('email');
        $contact->birthdate = $request->input('birthdate');

        $contact->save();
        return redirect()->route('formdata');

    }
}
