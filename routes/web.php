<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.⚡home')->name('home');
Route::view('/blog', 'pages.blog.⚡blog-home')->name('blog');
Route::view('/blog-buscador', 'pages.blog.⚡blog-buscador')->name('blog-buscador');
Route::view('/blog-articulo', 'pages.blog.⚡blog-articulo')->name('blog-articulo');
Route::view('/que-incluye', 'pages.⚡que-incluye')->name('que-incluye');
Route::view('/dominio-y-hosting-email', 'pages.⚡dominio-y-hosting-email')->name('dominio-y-hosting-email');
Route::view('/opiniones', 'pages.⚡opiniones')->name('opiniones');
Route::view('/faq', 'pages.⚡faq')->name('faq');
Route::view('/contacto', 'pages.⚡contactanos')->name('contactanos');

require __DIR__.'/settings.php';
