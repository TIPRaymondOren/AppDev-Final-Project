@include('mainapp.nav')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Category</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/score.css') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</head>

<body style="background-image: url('/images/cabinbg.png');">


    <h1 class="text-center text-light mt-5">I am a Master of...</h1>


    <table style="margin:auto; ">
        <tr>
            <td>
                <a href="{{ url('/land') }}" width="500" height="500"> <img width="500"
                        height="500"src="/images/quizmul.png" /></a>
            </td>
            <td> <a href="{{ url('/category') }}" width="500" height="500"> <img width="500"
                        height="500"src="/images/quizdiv.png" /></a></td>
        </tr>

    </table>

</body>

</html>
