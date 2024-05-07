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
        <link href="{{ asset('css/lesson.css')}}" rel="stylesheet" type="text/css">
        
        <!-- Bootstrap CDNs -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </head>
    <body class="font-sans antialiased">
        <div class="main-container">
            <div class="title">Math Quest</div>
            <div class="content-container">
                <div class="desc-cont learn-container">
                    <div class="title-cont learn-title">
                        <div class="learn-how-to">
                            Learn how to
                        </div>
                        <div class="subject-cont">
                            Multiply
                        </div>
                    </div>
                    <div class="multiply-desc">
                        <ul>
                            <li class="list mul-list">(3) Lesson Tiers</li>
                            <li class="list mul-list">(3) Quiz Difficulty Tiers</li>
                        </ul>
                        <a href="#" class="btn btn-success">Start Dividing Now!</a>
                    </div>
                </div>
                <div class="desc-cont practice-container">
                    <div class="title-cont practice-title">
                        <div class="learn-how-to">
                            Learn how to
                        </div>
                        <div class="subject-cont">
                            Divide
                        </div>
                    </div>
                    <div class="divide-desc">
                        <ul>
                            <li class="list div-list">(3) Lesson Tiers</li>
                            <li class="list div-list">(3) Quiz Difficulty Tiers</li>
                        </ul>
                        <a href="#" class="btn btn-success">Start Dividing Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
