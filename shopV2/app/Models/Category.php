<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Category
{
    public static function find($slug){
        base_path();
        if (!file_exists($path = resource_path("categories/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        return file_get_contents($path);
    }
}