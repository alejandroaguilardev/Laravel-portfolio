<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use App\Models\Information;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function Store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|min:5',
            'telefono'=>'required|min:9',
            'correo'=>'required|email|min:5',
            'mensaje'=>'required|min:10',
        ]);

        $mail = new ContactMailable($request->all());
        $email = Information::where('label','email')->first();
        Mail::to($email->description)->send($mail);
        return redirect()->route('home.index')->with('alert','El Mensaje Fue Enviado');
    }
}
