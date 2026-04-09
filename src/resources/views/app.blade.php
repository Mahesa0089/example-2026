<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Memanggil file head.blade.php di folder partials --}}
    @include('partials.head')
</head>
<body>

    {{-- Memanggil navbar --}}
    @include('partials.navbar')

    {{-- Tempat konten utama dari welcome.blade.php muncul --}}
    @yield('content')

    {{-- Memanggil footer --}}
    @include('partials.footer')

    {{-- Memanggil script JS --}}
    @include('partials.scripts')

</body>
</html>