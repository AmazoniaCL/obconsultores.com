<!DOCTYPE html>
<html lang="es">

@include('layout.head')

<body class="counter-scroll">

    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    
    @include('layout.header')

    {{-- CONTENT --}}
    @yield('content')

    @include('layout.footer')
    
    @include('layout.scripts')
    
</body>
</html>