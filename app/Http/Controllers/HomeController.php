<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == "admin") {
            return redirect(route('adi'));
        };

        if (Auth::user()->role == "paciente") {
            return "paciente logueado";
        };
        if (Auth::user()->role == "doctor") {
            return "doctor logueado";
        }

        return '/home';
    }
}
