<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learnings;

class Admin extends Controller
{
    function inputLearning(Request $request) {
        
        $judul = $request->input('judul');
        $konten = $request->input('konten');

        Learnings::create([
            'judul' => $judul,
            'konten' => $konten
        ]);
        
    }
}
