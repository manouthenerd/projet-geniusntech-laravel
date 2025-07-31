<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Upload;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
            'title'         => ['required', 'string'],
            'summary'       => ['required', 'string'],
            'description'    => ['required', 'string'],
            'image'         => ['required', 'file']
        ]);

        $image_path = Upload::store($validated['image'], 'services');

         if(! (bool) $image_path) {
            return back()->withErrors(['image' => "La taille de l'image doit être ≤ 10Mo"]);
        }

        Service::create([
            'title'         => $validated['title'],
            'summary'       => $validated['summary'],
            'image'         => $image_path,
            'description'   => $validated['description'],
            'identifier'    => Str::slug($validated['title'])
        ]);

        return redirect(route('dashboard.services'));

    }

    public function update(Request $request, Service $service)
    {

        $image_path = "";

        $request->validate([
            'title'         => ['required', 'string'],
            'summary'       => ['required', 'string'],
            'image'         => ['required', 'sometimes', 'image'],
            'description'   => ['required', 'string']
        ]);

        $image = $request->file('image');

        if ((bool) $image) {
            $image_path = Upload::store($image, "services");
        }

        if(! (bool) $image_path) {
            return back()->withErrors(['image' => "La taille de l'image doit être ≤ 10Mo"]);
        }

        // Modification des données
        $service->title = $request->input('title');
        $service->summary = $request->input('summary');
        $service->image = $image ? $image_path : $service->image;
        $service->description = $request->input('description');

        // Enregistrer les modifications
        $service->save();

        return redirect(route('dashboard.show-service', ['service' => $service->id]));
    }
}
