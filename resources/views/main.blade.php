<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="../css/app.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body class="container mt-5">
        <header>
            <nav>
                <ul>
                    <li><a href="{{ route('books.index') }}">View All Books</a></li>
                    <li><a href="{{ route('createBook') }}">Register Book</a></li>
                    <li><a href="{{ route('categories.index') }}">View All Categories</a></li>
                    <li><a href="{{ route('createCategory') }}">Register Category</a></li>
                    <li><a href="{{ route('searchForm') }}">Search Book</a></li>
                </ul>
            </nav>
        </header>

        <h1>
            @yield('title')
        </h1>

        <main>
            @yield('content')
        </main>

        <footer>
            <p class="mt-5">Copyright &copy; {{ date('Y') }} Daniel Urbano</p>
        </footer>
    </body>
</html>
