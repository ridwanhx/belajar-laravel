<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function index()
    {
        $data['title'] = 'About';

        $data['mahasiswa'] = [
            [
                'npm' => 623220024,
                'nama' => 'Muhamad Ridwan',
                'email' => 'ridwan@gmail.com',
                'jurusan' => 'Teknik Informatika'
            ],
            [
                'npm' => 623220025,
                'nama' => 'May Hanny Khoirunnisa',
                'email' => 'hanny@gmail.com',
                'jurusan' => 'Farmasi'
            ],
        ];

        // dd($data);
        return view('about', $data);
    }
}
