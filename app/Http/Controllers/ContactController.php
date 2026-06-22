<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // 1. Validamos los datos que llegan del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'destinatario' => 'required|email',
            'subject' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        // 2. Preparamos el array de datos para la plantilla del correo
        $data = [
            'name'    => $request->name,
            'email'   => $request->destinatario,
            'subject' => $request->subject,
            'mensaje' => $request->mensaje,
        ];

        // 3. Enviamos el correo 
        Mail::send('emails.cotizacion', $data, function($message) use ($data) {
            $message->to('devixsystems8@gmail.com') 
                    ->subject('Nueva Cotización: ' . $data['subject'])
                    ->from($data['email'], $data['name']);
        });

        // 4. Retornamos a la página con un mensaje de éxito
        return back()->with('success', '¡Tu solicitud de cotización ha sido enviada con éxito!');
    }
}