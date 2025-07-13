<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(Service $service) {

        if(! $service) {
            return abort(404);
        }

        return view("service.edit-service", ['service' => $service]);
    }

    public function edit($service) {
        return [$service];
    }

    public function store($service) {
        return [$service];
    }

    public function update($service) {
        return [$service];
    }

    public function destroy($service) {
        return [$service];
    }
}
