<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title>Laravel + Inertia + React</title>
    @routes
    @viteReactRefresh
    @vite(['resources/js/app.tsx', 'resources/css/app.scss'])

</head>
<body>
    @inertia
</body>
</html>
