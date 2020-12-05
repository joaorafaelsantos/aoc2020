<?php

namespace App\Helpers;

class File
{
    public static function toArray($path): array
    {
        $file = fopen($path, "r");
        $input = fread($file, filesize($path));
        fclose($file);
        return explode("\n", $input);
    }

    public static function toArrayWithEmptyLines($path): array
    {
        $file = fopen($path, "r");
        $input = fread($file, filesize($path));
        fclose($file);
        return array_map(function ($entry) {
            return str_replace("\n", " ", $entry);
        }, explode("\n\n", $input));
    }
}