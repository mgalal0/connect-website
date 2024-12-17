<?php
use Illuminate\Support\Facades\File;



if (!function_exists('uploadImage ')) {
    function uploadImage($image, $path)
    {
   $filename = time() . '.' . $image->getClientOriginalExtension();
   $image->move(public_path($path), $filename);
   return $filename;
    }
}


if (!function_exists('deleteImage ')) {
    function deleteImage($image, $path)
    {
        $path=public_path($path.$image);
       
        if(File::exists($path) && !File::isDirectory($path)){
            unlink($path);
        }
    }
}

function isActiveRoute($routeName)
{
    return \Request::route()->getName() === $routeName ? 'active' : '';
}