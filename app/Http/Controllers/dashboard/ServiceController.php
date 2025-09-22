<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function show(Service $service)
    {

        if (! $service) {
            return abort(404);
        }

        return view("service.edit-service", ['service' => $service]);
    }

    public function create()
    {

        return view('service.create-service');
    }

    public function edit(Service $service)
    {
        abort_if(! $service, 404);

        return view('service.edit-service', ['service' => $service]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => ['required', 'string'],
            'summary'     => ['required', 'string'],
            'description' => ['required', 'string'],
            'image'       => ['required', 'file', 'image', 'max:10240'], // max 10Mo
        ]);

        // Générer un nom unique pour l'image
        $imageName = time() . '_' . uniqid() . '.' . $validated['image']->getClientOriginalExtension();

        // Déplacer le fichier dans public/images
        $validated['image']->move(public_path('images/services'), $imageName);

        // Stocker le chemin relatif dans la BDD
        $image_path = '/images/services/' . $imageName;

        Service::create([
            'title'       => $validated['title'],
            'summary'     => $validated['summary'],
            'description' => $validated['description'],
            'image'       => $image_path,
            'identifier'  => Str::slug($validated['title']),
        ]);

        return redirect()->route('dashboard.services');
    }


    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title'       => ['required', 'string'],
            'summary'     => ['required', 'string'],
            'image'       => ['sometimes', 'image', 'max:10240'], // facultatif, max 10Mo
            'description' => ['required', 'string'],
        ]);

        // Vérifier si une nouvelle image a été uploadée
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Générer un nom unique
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Déplacer dans public/images/services
            $image->move(public_path('images/services'), $imageName);

            // Stocker le chemin relatif
            $service->image = '/images/services/' . $imageName;
        }

        // Mettre à jour les autres champs
        $service->title = $validated['title'];
        $service->summary = $validated['summary'];
        $service->description = $validated['description'];

        // Enregistrer les modifications
        $service->save();

        return redirect()->route('dashboard.services.show', ['service' => $service->id])
            ->with('success', 'Service mis à jour avec succès !');
    }
}
