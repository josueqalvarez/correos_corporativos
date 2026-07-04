<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.⚡home')->name('home');
Route::view('/que-incluye', 'pages.⚡que-incluye')->name('que-incluye');
Route::view('/dominio-y-hosting-email', 'pages.⚡dominio-y-hosting-email')->name('dominio-y-hosting-email');
Route::view('/opiniones', 'pages.⚡opiniones')->name('opiniones');
Route::view('/faq', 'pages.⚡faq')->name('faq');
Route::view('/contacto', 'pages.⚡contactanos')->name('contactanos');

require __DIR__.'/settings.php';
