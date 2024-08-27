<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contact extends Controller
{
    public function sendEmail(Request $request)
    {
        
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'Phone' => 'nullable|string|max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('Phone'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Mengirim email menggunakan Mailable ContactEmail
        Mail::to('info@parunghijauperkasa.com')->send(new ContactEmail($data));

        // Redirect kembali dengan pesan sukses
        return view('content.thanks');
    }
}
