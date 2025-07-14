<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Upload extends Model
{

    public static function store(UploadedFile $file, string $path): mixed {

        // Convertir la taille de Octet en Mo et vérifier la taille
        $file_size_in_kb = $file->getSize() / pow(1024, 2);

        $image_size_in_mb = round($file_size_in_kb, 2);

        if($image_size_in_mb > 10) {
            return false;
        }

        // Créer un Hash pour le nom du fichier
        $file_name = $file->hashName();

        Storage::disk('public')->createDirectory($path);

        // Enregistrer le fichier sur le serveur
        $is_stored_successfully = Storage::disk('public')->putFileAs($path, $file, $file_name);

        $file_path = "$path/$file_name";

        if(! $is_stored_successfully) {
            return false;
        }

        return $file_path;

    }
}
