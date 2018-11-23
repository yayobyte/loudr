<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @component('layouts.components.headers')
    @endcomponent
</head>
<body>
    <div id="app">
        @component('layouts.components.navbar')
        @endcomponent

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="bg-dark text-white mt-4">
            @component('layouts.components.footer')
            @endcomponent
        </footer>

    </div>
</body>
</html>
