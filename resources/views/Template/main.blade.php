<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP |  @yield('tittle')</title>
    @include('Template.css')
<body>
    @include('Template.navbar')

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        @include('Template.footer')
    </footer>
    
    @include('Template.javascript')
</body>
</html>