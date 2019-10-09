<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function contact(Request $request)
    {
        $subject = "Solicitar cotizacion";
        $for = "contacto@estudiogyd.com.ar";
        $from = $request->get('mail');

        Mail::send('/dashboard/email', $request->all(), function ($msj) use ($subject, $for, $from) {
            $msj->from($from, "Consulta de cotizacion");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect('/home');
    }

    public function soporte(Request $request)
    {
        $subject = "Soporte tecnico";
        $for = "info@estudiogyd.com.ar";
        $from = $request->get('mail');

        Mail::send('/dashboard/soporte-email', $request->all(), function ($msj) use ($subject, $for, $from) {
            $msj->from($from, "Consulta de soporte tecnico");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect('/home');
    }
}
