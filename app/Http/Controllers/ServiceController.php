<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all(['id', 'identifier', 'title', 'summary', 'image']);
        return view('services', ['services' => $services]);
    }

    public function show($slug) 
    {
        // Récupérer le service s'il existe ou afficher une erreur
        $service = Service::where('identifier', $slug)->firstOr(function() {
            return abort(404);
        })->only(['id', 'title', 'summary', 'description', 'image']);


        //Récupérer deux autres services différents du 1er
        $next_services = Service::where('id', '!=', $service['id'])
            ->limit('2')
            ->inRandomOrder()
            ->get(['title', 'identifier', 'summary', 'description', 'image']);
       
        return view('service', [
            'service' => $service,
            'next_services' => $next_services
        ]);
    }

}