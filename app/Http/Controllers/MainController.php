<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santo;

class MainController extends Controller
{

    // index 
    public function home() {

        $santi = Santo::orderBy('created_at', 'DESC') -> get();
        // $data = [
        //     'santi' => $santi
        // ];
        return view('pages.home', compact('santi'));
    } 

    // --- SHOW
    public function santoShow($id) {

        $santo = Santo::find($id);

        $data = [
            'santo' => $santo
        ];

        return view('pages.santo', $data);
    }

    // --- DELETE
    public function santoDestroy($id) {

        $santo = Santo::find($id);
        $santo -> delete();

        return redirect() -> route('home');
    }
}


