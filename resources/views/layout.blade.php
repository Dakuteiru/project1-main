<!DOCTYPE html>
<html>
<head>
    <title>Простая страница</title>
</head>
<body>
    <h1>!</h1>
    <p></p>
    <a href="https://google.com">Это ссылка на Google</a>
    <header>
        <h1>my site</h1>
    </header>

    <main>
    </main>
    <footer>
        <p>© 2024 Мой сайт. Все права защищены.</p>
    </footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
@stack('scripts')
</body>
</html>
