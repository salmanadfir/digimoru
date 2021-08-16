<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class WelcomeController extends Controller
{
    public function index()
    {
        $barang = Barang::paginate(9);
        return view('welcome', compact('barang'));
    }
}
