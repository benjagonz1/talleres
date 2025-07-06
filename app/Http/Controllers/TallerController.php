<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taller;

class TallerController extends Controller
{
    public function index()
    {
        $talleres = Taller::all(); // Podés filtrar si querés
        return view('dashboard', compact('Dashboard'));
    }
}