<?php

use Illuminate\Support\Facades\Route;

# Home
Route::livewire('/', 'pages.⚡home')->name('home');

# Blog
Route::livewire('/blog', 'pages.blog.blog-home')->name('blog');
Route::livewire('/blog/{title}', 'pages.blog.⚡blog-articulo')->name('blog-articulo');

# Que incluye
Route::livewire('/que-incluye', 'pages.⚡que-incluye')->name('que-incluye');

# Dominio y Hosting Email
Route::livewire('/dominio-y-hosting-email', 'pages.⚡dominio-y-hosting-email')->name('dominio-y-hosting-email');

# Opiniones
#Route::livewire('/opiniones', 'pages.⚡opiniones')->name('opiniones');

# Preguntas frecuentes
Route::livewire('/faq', 'pages.⚡faq')->name('faq');

# Contáctanos
Route::livewire('/contacto', 'pages.⚡contactanos')->name('contacto');

# Inicio de sesión
Route::livewire('/login', 'pages.users.auth.⚡login')->name('login');
Route::livewire('/crear-cuenta', 'pages.users.auth.⚡create')->name('crear-cuenta');
Route::livewire('/profile', 'pages.users.⚡profile')->name('profile');

require __DIR__.'/settings.php';
