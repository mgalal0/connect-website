<?php

namespace App\Http\Controllers\Front;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{



    function create()
    {
        return view('front.contact');
    }

    function store(ContactRequest $request)
    {
        if ($request->ajax()) {
            $contact = Contact::create([
                'name' => $request->name,
                'message' => $request->message,
                'email' => $request->email
            ]);
        }

        if ($contact) {
            Alert::error('success', 'Success Message');
            return response()->json(['success' => 'Message send successfully']);
        } else {
            return response()->json(['error' => 'failed']);
        }
    }
}
