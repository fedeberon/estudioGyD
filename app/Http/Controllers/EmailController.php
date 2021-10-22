<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Mail;

class EmailController extends Controller
{
    public function cotizacion(Request $request)
    {
        $subject = "Consulta de cotizacion";
        $for = "info@estudiogyd.com.ar";
        $from = $request->get('mail');

        Mail::send('/dashboard/email', $request->all(), function ($msj) use ($subject, $for, $from) {
            $msj->from($from, "Consulta de cotizacion");
            $msj->subject($subject);
            $msj->to($for);
        });
        echo '<script type="text/javascript">'
        , 'history.go(-2);'
        , '</script>';
    }

    public function soporte(Request $request)
    {
        $subject = "G&D Consulta Plataforma Premium";
        $for = "info@estudiogyd.com.ar";
        $from = $request->get('mail');

        Mail::send('/dashboard/soporte-email', $request->all(), function ($msj) use ($subject, $for, $from) {
            $msj->from($from, "G&D Consulta Plataforma Premium");
            $msj->subject($subject);
            $msj->to($for);
        });
        echo '<script type="text/javascript">'
        , 'history.go(-2);'
        , '</script>';
    }

    public function consulta(Request $request)
    {
        $subject = "Consulta EstudioG&D";
        $for = "info@estudiogyd.com.ar";
        $from = $request->get('mail');

        Mail::send('/dashboard/consulta-email', $request->all(), function ($msj) use ($subject, $for, $from) {
            $msj->from($from, "Consulta EstudioG&D");
            $msj->subject($subject);
            $msj->to($for);
        });
        echo '<script type="text/javascript">'
        , 'history.go(-2);'
        , '</script>';
    }
}
