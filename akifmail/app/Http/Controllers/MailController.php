<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Mail facade'ını kullanabilmek için import et
use App\Mail\WelcomeMail; // WelcomeMail sınıfını import et

class MailController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        
       
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'email' => 'required|email',
            'message' => 'required|string|max:500'
        ]);
    
        $data = $validated;   

        
        Mail::to('acetakif@gmail.com')->send(new WelcomeMail($data));
        
        return 'Mail başarıyla gönderildi!';
    }
}
