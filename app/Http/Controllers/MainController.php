<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santo;

class MainController extends Controller
{
    public function home() {

        $santi = Santo::orderBy('numero_miracoli') -> get();

        $data = [
            'santi' => $santi
        ];
        return view('pages.home' , $data);
    } 
}
