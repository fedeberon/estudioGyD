<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function contact(Request $request)
    {
        $subject = "solicitar cotizacion";
        $for = "elrecki@gmail.com";
        Mail::send('/dashboard/email', $request->all(), function ($msj) use ($subject, $for) {
            $msj->from("tucorreo@gmail.com", "NombreQueApareceráComoEmisor");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect('/home');
    }
}
