<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactForm(){
        return view('Contact');
    }

    public function sendMail(){
        
    }
}
