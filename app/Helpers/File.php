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
}