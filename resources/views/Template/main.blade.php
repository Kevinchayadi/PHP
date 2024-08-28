<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta-description', 'Default description')">
    <meta name="keywords" content="@yield('meta-keywords', 'default, keywords')">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="@yield('og-title', 'Default Title')">
    <meta property="og:description" content="@yield('og-description', 'Default description')">
    <meta property="og:url" content="@yield('og-url', url('/'))">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter-title', 'Default Title')">
    <meta name="twitter:description" content="@yield('twitter-description', 'Default description')">
    <meta name="twitter:url" content="@yield('twitter-url', url('/'))">
    <title>@yield('tittle') - PT. Parung Hijau Perkasa</title>
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