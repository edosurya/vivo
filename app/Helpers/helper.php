<?php


if (!function_exists('user')) {
    function user()
    {
        return auth()->user();
    }
}

if (!function_exists('autoVersioning')) {

    function autoVersioning($file)
    {
        $physical_file = public_path($file);
        return filemtime($physical_file);
    }
}

