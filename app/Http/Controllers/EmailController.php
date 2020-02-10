<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function cotizacion(Request $request)
    {
        $subject = "Solicitar cotizacion";
        $for = "joa1499@gmail.com";
        $from = $request->get('mail');

        Mail::send('/dashboard/email', $request->all(), function ($msj) use ($subject, $for, $from) {
            $msj->from($from, "Consulta de cotizacion");
            $msj->subject($subject);
            $msj->to($for);
        });
        return view('home');
    }

    public function soporte(Request $request)
    {
        $subject = "G&D Consulta Plataforma Premium";
        $for = "joa1499@gmail.com";
        $from = $request->get('mail');

        Mail::send('/dashboard/soporte-email', $request->all(), function ($msj) use ($subject, $for, $from) {
            $msj->from($from, "Consulta de soporte tecnico");
            $msj->subject($subject);
            $msj->to($for);
        });
        return view('home');
    }

    public function consulta(Request $request)
    {
        $subject = "Consulta drones";
        $for = "joa1499@gmail.com";
        $from = $request->get('mail');

        Mail::send('/dashboard/consulta-email', $request->all(), function ($msj) use ($subject, $for, $from) {
            $msj->from($from, "Consulta EstudioG&D");
            $msj->subject($subject);
            $msj->to($for);
        });
        return view('welcome');
    }
}
