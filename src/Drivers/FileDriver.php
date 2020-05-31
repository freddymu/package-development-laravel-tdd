<?php


namespace freddymu\Press\Drivers;


use freddymu\Press\PressFileParser;
use Illuminate\Support\Facades\File;

class FileDriver
{

    public function fetchPosts()
    {
        $files = File::files(config('press.path'));

        foreach ($files as $file) {
            $posts[] = (new PressFileParser($file->getPathname()))->getData();
        }

        return $posts ?? [];
    }
}