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

}
