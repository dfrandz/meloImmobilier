<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //

    public function home(){
        return view('client.home');
    }

    public function location(){
        return view('client.pages.location');
    }

    public function vente(){
        return view('client.pages.vente');
    }

    public function hotel(){
        return view('client.pages.hotel');
    }

    public function contact(){
        return view('client.pages.contact');
    }

    public function detail(){
        return view('client.pages.details');
    }
    public function detailPiece(){
        return view('client.pages.detailsPiece');
    }
    public function login(){
        return view('client.pages.login');
    }
    
}
