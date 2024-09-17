<?php 

// app/helpers.php

use App\Models\Label;

if (! function_exists('getLabel')) {
    function getLabel($key)
    {
        $label = Label::where('key', $key)->first();
        return $label ? $label->value : $key;
    }
}
