<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactoController extends Controller
{
public function enviar(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    $data = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'subject' => $request->input('subject'),
        'contenido' => $request->input('message'), // 👈 Aquí renombramos correctamente
    ];

    try {
Mail::send('emails.contacto', $data, function ($msg) use ($data) {
    $msg->to('jd1005337@gmail.com')
        ->replyTo($data['email'], $data['name']) // 👈 Esto asegura que al hacer "responder", vaya al remitente correcto
        ->subject($data['subject']);
});


        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        \Log::error('Error al enviar mensaje de contacto: ' . $e->getMessage());
        return response()->json(['success' => false], 500);
    }
}

}
