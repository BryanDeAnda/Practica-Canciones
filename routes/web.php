<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/canciones/{id}', function ($id) {

    $canciones = [];
    $canciones[] = [
        'nombre' => 'Hata la raiz',
        'artista' => 'Natalia Lafourcade'];
    $canciones[] = [
        'nombre' => 'Rata de dos patas',
        'artista' => 'Paquita la del barrio'];
    $canciones[] = [
        'nombre' => 'Cerveza', 
        'artista' => 'Wendy Sulca'];

    $cancion = $canciones[$id];

    //dd($canciones);
    
    return view('detalleCancion', compact('cancion'));
    //->with(['canciones' => $canciones]);
});