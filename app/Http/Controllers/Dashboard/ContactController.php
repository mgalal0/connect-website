<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    
    public function index()
    {
        $contacts = Contact::latest()->paginate(5, ['id', 'message', 'email','name']);

        return view('dashboard.contacts.index', ['contacts' => $contacts]);
    }






    public function destroy(contact  $contact)
    {
        $contact = $contact->delete();
        if ($contact) {
            toast('deleted succfully', 'success');
        } else {
            toast('failed ', 'error');
        }
        return redirect()->back();
    }
}
