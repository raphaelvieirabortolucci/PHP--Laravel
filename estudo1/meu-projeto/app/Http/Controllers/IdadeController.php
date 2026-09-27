<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdadeController extends Controller
{
    public function exibir() {
        $idade = 14;

        return view('idade', [
            'idade' => $idade
        ]);
    }
}
