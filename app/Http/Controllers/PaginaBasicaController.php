<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaBasicaController extends Controller
{
    public function sobre()
    {
        return view('sobre');
    }

    public function contato() {
        return view('contato');
    }
}
