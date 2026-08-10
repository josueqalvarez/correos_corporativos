<!DOCTYPE html>

<html class="scroll-smooth" lang="es">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>EmailCorp | Correos Corporativos Profesionales</title>
    <meta
        content="Configuración experta de correos corporativos para tu negocio. Rápido, profesional y sin complicaciones."
        name="description" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
</head>

<body class="bg-surface font-body-md text-on-surface">

    {{-- Header > nav --}}
    <livewire:header />

    <main class="pt-header-height">

        {{ $slot }}

    </main>

    <!-- Footer -->
    <livewire:footer />

</body>

</html>
