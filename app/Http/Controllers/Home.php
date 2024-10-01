<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    // method yang akan mengirimkan data ke view
    public function index()
    {
        // contoh pengiriman data ke view
        $data['title'] = 'Home';
        $data['nama'] = 'Hana Meysha Berliana';

        // kembalikan ke view 'home'
        return view('home', $data);
    }
}
