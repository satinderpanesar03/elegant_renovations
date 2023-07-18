<?php

namespace App\Services;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class ImageUploadService
{
    public function uploadImage(UploadedFile $file, $platform = 'local', $path = 'images')
    {
        // Generate a unique filename
        $filename = $this->generateUniqueFilename($file);
        // Store the image file in the specified path
        if($platform == 'local'){
            $filePath = $file->storeAs($path, $filename, 'public');
        }else if ($platform == 's3'){
            return 's3 upload under development';
        }

        return $filePath;
    }

    private function generateUniqueFilename(UploadedFile $file)
    {
        $extension = $file->getClientOriginalExtension();

        // Generate a unique filename using a combination of timestamp and random string
        $filename = time() . '_' . Str::random(10) . '.' . $extension;

        return $filename;
    }
}
