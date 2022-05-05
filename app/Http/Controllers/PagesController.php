<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('home');
    }
    public function contacto() {
        return view('contacto');
    }
    public function deporte() {
        return view('deporte');
    }
    public function negocios() {
        return view('negocios');
    }
}
