#!/bin/bash

for nombre in que-incluye opiniones home dominio-y-hosting-email contactanos faq 
do
    php artisan livewire:convert pages.$nombre --mfc
done

for nombre in profile_activity profile_information profile_settings profile
do
    php artisan livewire:convert pages.users.$nombre --mfc
done

for nombre in create login
do
    php artisan livewire:convert pages.users.auth.$nombre --mfc
done

for nombre in blog-articulo blog-home comment-section
do
    php artisan livewire:convert pages.blog.$nombre --mfc
done