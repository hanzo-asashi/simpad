<?php


namespace App\Http\Controllers;


class SymlinkController extends Controller
{
    public function run()
    {
        $target = storage_path("app/public");
        $explode_base_path = explode(DIRECTORY_SEPARATOR, base_path());
        if (config('app.env') === ' production') {
            array_pop($explode_base_path);
        }
        array_push($explode_base_path, config('app.env') === ' production' ? 'storage' : 'public\storage');
        $path = implode(DIRECTORY_SEPARATOR, $explode_base_path);
        symlink($target, $path);
        return true;
    }
}