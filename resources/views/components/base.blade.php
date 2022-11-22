<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_TITLE'); }}</title>
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles

</head>
<body class="h-full font-sans antialiased bg-gray-200">
    {{-- @yield('content') --}}
    {{ $slot }}

    @livewireScripts
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
