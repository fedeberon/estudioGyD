<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;


class NewsletterController extends Controller
{
    public function suscribirse() {
        DB::table('users')
            ->where('suscrito', '=', 0)
            ->where('name', '=', Auth::user()->name)
            ->update(['suscrito' => 1]);
        return view('/home');

    }

    public function desuscribirse(){
        DB::table('users')
            ->where('suscrito', '=', 1)
            ->where('name', '=', Auth::user()->name)
            ->update(['suscrito' => 0]);
        return view('/home');
    }

    /*public function newsletterEmail(Request $request)
    {
        $subject = "Newsletter Estudio G&D";
        $from = "contacto@estudiogyd.com.ar";
        $emails = DB::table('users')
            ->where('suscrito', '=', 1)
            ->get('email');

        foreach ($emails as $email){
            $for = $email->email;

            Mail::send('/newsletter/newsletterEmail', $request->all(), function ($msj) use ($subject, $for, $from) {
                $msj->from($from, "Estudio G&D");
                $msj->subject($subject);
                $msj->to($for);
            });
        }
        return redirect('/home');
    }*/

    public function newsletterEmail(Request $request) {
        try {
          	$subject = "Newsletter Estudio G&D";
            
            $emails = DB::table('users')
                ->where('suscrito', '=', 1)
                ->get('email');

            foreach ($emails as $email){
                $for = $email->email;

                Mail::send('/newsletter/newsletterEmail', $request->all(), function ($msj) use ($subject, $for) {
                    $msj->subject($subject);
                    $msj->to($for);
                });
            }

        } catch (Exception $e) {
            log::debug($e->getMessage());
            return $e->getMessage();
        }

        return redirect('/home');
    }
}