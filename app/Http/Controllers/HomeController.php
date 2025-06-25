<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $services = Service::where('id', '!=', 0)
            ->limit('4')
            ->inRandomOrder()
            ->get(['title', 'identifier', 'summary', 'image']);

        return view('home')->with(['services' => $services]);
    }
}
