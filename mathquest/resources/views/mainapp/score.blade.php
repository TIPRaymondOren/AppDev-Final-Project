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
    <link href="{{ asset('css/score.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet" type="text/css">

    <!-- Bootstrap CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body style="background-image: url('/images/cabinbg.png');">

    @include('mainapp.nav')

    <div class="glass-container">
        <h2 class="text-light">Your Score</h2>
        <div class="score">tempScore</div>
    </div>
    <div class="glass-container-desc">
        <h5 class="text-desc">Description</h5>
        <div class="score-desc">You did it! You truly are a Master of Multiplication. You can check out the Division Part to see of you’re a Division Master as well!</div>
    </div>

    <div class="buttons">
        <a href="{{ url('/leaderboards') }}" style="text-decoration: none;">
            <button type="submit" class="btn btn-light">Check the Leaderboards</button>
        </a>
    </div>


</body>

</html>