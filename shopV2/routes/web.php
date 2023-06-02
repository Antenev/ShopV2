<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('categories/{category}', function ($slug) {
    return view('category', [
        'category' => Category::find($slug)
    ]);

 /*    $path= __DIR__ . "/../resources/categories/{$slug}.html";
    if(! file_exists($path)){
        abort(404);
    }

    $category= file_get_contents($path);

    return view('category',['category' => $category]);  */
});