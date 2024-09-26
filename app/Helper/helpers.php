<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

/**
 * Upload an image and return its URL.
 *
 * @param  \Illuminate\Http\UploadedFile  $image
 * @param  string  $directory
 * @return string
 */
function uploadImage($file, $folder, $name): string
{
    $imageName = Str::slug($name) . '-' . time() . '.' . $file->extension();
    $file->move(public_path('uploads/' . $folder), $imageName);
    $path = 'uploads/' . $folder . '/' . $imageName;
    return $path;
}



/**
 * Deletes the specified image file if it exists.
 *
 * @param string $image The path to the image file to delete.
 * @return bool True if the file was successfully deleted, false otherwise.
 */
// Delete Image

function deleteImage($image)
{
    $fullPath = public_path($image); // Ensure the full path is correctly handled
    if (isset($image) && file_exists($fullPath)) {
        unlink($fullPath);
        return true;
    }
    return false;
}


function generateUniqueSlug($title, $table, $id = null) {
    $slug = Str::slug($title);
    $query = DB::table($table)->where('slug', 'LIKE', $slug . '%');

    if ($id) {
        $query->where('id', '!=', $id);
    }

    $allSlugs = $query->pluck('slug');

    if (!$allSlugs->contains($slug)) {
        return $slug;
    }

    for ($i = 1; $i <= 100; $i++) {
        $newSlug = $slug . '-' . $i;
        if (!$allSlugs->contains($newSlug)) {
            return $newSlug;
        }
    }

    throw new \Exception('Unable to generate unique slug');
}




