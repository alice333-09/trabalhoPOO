<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // Não precisa fazer session_start(). O middleware 'auth' já garante o acesso.
        return view('index');
    }
}