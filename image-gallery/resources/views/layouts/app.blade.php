<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Galerie d'images</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div>
            <nav>
                @include('components.nav_bar')
            </nav>
        </div>
        <div>
            <br></br>
            @yield('content')
        </div>
    </body>
</html>