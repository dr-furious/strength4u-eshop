<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function show($filename)
    {
        $path = config('app.external_image_path') . '/' . $filename;

        if (!File::exists($path)) {
            // Return a 404 if the image not exists
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        return response($file, 200)->header('Content-Type', $type);
    }
}
