<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartupController extends Controller
{
    public function index()
    {
        return view('startup.index');
    }

    public function adn()
    {
        return view('startup.adn');
    }

    public function vision()
    {
        return view('startup.vision');
    }
}
