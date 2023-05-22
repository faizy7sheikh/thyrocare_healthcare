<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .workflow-section {
        background-image: url('');
        background-size: cover;
        background-position: center;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        padding: 20px;
    }

    .workflow-card {
        background-color: rgba(220, 53, 69, 0.8);
        border: none;
        border-radius: 10px;
    }
        </style>
</head>
<body>
    <header>
        @include('layouts.header')
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        @include('layouts.footer')
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
