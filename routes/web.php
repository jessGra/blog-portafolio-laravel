<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Auth;


/*
//ver todos los proyectos
Route::get('/proyectos', [ProjectController::class, 'index'])->name('projects.index');
//nuevo proyecto
Route::get('/proyectos/crear',[ProjectController::class, 'create'])->name('projects.create');
Route::post('/proyectos',[ProjectController::class, 'store'])->name('projects.store');
//Editar proyecto
Route::get('/proyectos/{project}/editar',[ProjectController::class, 'edit'])->name('projects.edit');
Route::patch('/proyectos/{project}',[ProjectController::class, 'update'])->name('projects.update');
//ver proyecto especifico
Route::get('/proyectos/{project}',[ProjectController::class, 'show'])->name('projects.show');
//eliminar proyecto
Route::delete('/proyectos/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
*/
//esta linea reemplaza todas las 7 rutas anteriores
Route::resource('projects', ProjectController::class);

Auth::routes(['register'=>false]);

Route::view('/', 'home')->name('home');
Route::view('/acerca-de-nosotros', 'about')->name('about');
Route::view('/contacto', 'contact')->name('contact');
Route::post('contacto', [MessageController::class, 'store'])->name('messages.store');