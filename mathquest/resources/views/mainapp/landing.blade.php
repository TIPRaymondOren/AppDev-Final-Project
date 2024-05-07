<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/land.css')}}" rel="stylesheet" type="text/css">
        
        <!-- Bootstrap CDNs -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </head>
    <body class="font-sans antialiased">
        <div class="main-container">
            <div class="title">Math Quest</div>
            <div class="btn btn-success" id="start-btn">
                <a href="#">Start your quest now</a>
            </div>
            <div class="description">
                <div class="desc-cont learn-container">
                    <div class="title-cont learn-title">
                        <div class="icon-container">
                            <img src="{{ asset('images/light-bulb.png') }}" alt="" srcset="" class="icon">
                        </div>
                        Learn.
                    </div>
                    <div class="learn-desc">
                        Access modules where you can learn step-by-step
                    </div>
                </div>
                <div class="desc-cont practice-container">
                    <div class="title-cont practice-title">
                        <div class="icon-container">
                            <img src="{{ asset('images/clipboard.png') }}" alt="" srcset="" class="icon">
                        </div>
                        Practice.
                    </div>
                    <div class="practice-desc">
                        Answer assessment quizzes for you to practice and test yourself!
                    </div>
                </div>
                <div class="desc-cont grow-container">
                    <div class="title-cont grow-title">
                        <div class="icon-container">
                            <img src="{{ asset('images/automation.png') }}" alt="" srcset="" class="icon">
                        </div>
                        Grow.
                    </div>
                    <div class="grow-desc">
                        Test your growth by answering different levels of quizzes and accessing leaderboards.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
