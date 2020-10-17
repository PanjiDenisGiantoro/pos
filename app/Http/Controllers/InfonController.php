<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfonController extends Controller
{
    //
    public function index()
    {
        return view('produk.info');
    }
}
