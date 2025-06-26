<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');


Route::get('/', function () {
    return view('home');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/sobre-nosotros', function () {
    return view('sobre-nosotros');
});

Route::get('/planes', function () {
    return view('planes');
});

Route::get('/login', function () {
    return redirect('/');  // Redirige a la página de inicio
});

Route::get('/register', function () {
    return redirect('/');  // Redirige a la página de inicio
});
Route::get('/terminos-y-condiciones', function () {
    return view('terminos');
})->name('terminos');

Route::get('/politicas-de-privacidad', function () {
    return view('politicas');
})->name('politicas');


// Ruta de fallback para redirigir a la página de inicio
Route::fallback(function () {
    return redirect('/');
});



