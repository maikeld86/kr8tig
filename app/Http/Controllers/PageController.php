<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{


    /**
     *dit wordt de index pagina... altijd eerst inloggen voordat je bij welkom komt
     */
    public function login()
    {
        return view('auth.login');
    }
    /**
     * stuurt je naar de welkom screen
     *
     * note dit moet later een redirect worden via een authenticatie
     */
    public function welkom()
    {
        return view('pages.welkom');
    }

}
