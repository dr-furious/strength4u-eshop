<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function show($filename)
    {
        $path = config('app.external_image_path') . '/' . $filename;

        if (!File::exists($path)) {
            abort(404);  // Return a 404 if the image does not exist
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        return response($file, 200)->header('Content-Type', $type);
    }
}
