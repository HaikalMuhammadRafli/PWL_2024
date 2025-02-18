<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return "2341720008, Haikal Muhammad Rafli";
    }

    public function articles($id)
    {
        return "Halaman artikel dengan ID {$id}";
    }
}
