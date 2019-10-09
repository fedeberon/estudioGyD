<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{

    public function tutoriales()
    {
        return view('/dashboard/tutoriales');
    }

    public function linkRegular()
    {
        return view('/dashboard/linksEmbebidos/linkRegular');
    }

    public function linkPremium()
    {
        return view('/dashboard/linksEmbebidos/linkPremium');
    }

    public function cotizacion()
    {
        return view('/dashboard/cotizacion');
    }

    public function soporte()
    {
        return view('/dashboard/soporte');
    }
}
