<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
class ReservasiController extends Controller
{
    public function index()
    {
        $reservasis = Reservasi::all();
        return view('reservasi', compact('reservasis'));
    }
}
