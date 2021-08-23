<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.landing-page.index');
    }

    public function perusahaan()
    {
        return view('pages.landing-page.perusahaan');
    }

    public function cto()
    {
        return view('pages.landing-page.cto');
    }

    public function ceo()
    {
        return view('pages.landing-page.ceo');
    }

    public function alamat()
    {
        return view('pages.landing-page.alamat');
    }

  
}
