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
    <link href="{{ asset('css/lesson-select.css') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</head>

<body class="lesson-select-bg">
    <div class="main-container">
        <div class="title">
            <div class="title">
                <img src="{{ asset('images/mqlogo.png') }}" alt="" srcset="" class="title-image">
            </div>
        </div>
        <div class="lesson-select-container">
            <div class="lesson-select-cont learn-container">
                <div class="title-cont learn-title">
                    <div class="learn-how-to">
                        Learn how to
                    </div>
                    <div class="subject-cont">
                        <img src="{{ asset('images/multiply.png') }}" alt="" srcset="" class="multiply-lesson-image">
                    </div>
                </div>
                <div class="multiply-desc">
                    <ul>
                        <li class="list mul-list">(3) Lesson Tiers</li>
                        <li class="list mul-list">(3) Quiz Difficulty Tiers</li>
                    </ul>
                    <a href="{{ url('/lesson-one-mul') }}" class="btn btn-success">Start Multiplying Now!</a>
                </div>
            </div>
            <div class="lesson-select-cont practice-container">
                <div class="title-cont practice-title">
                    <div class="learn-how-to">
                        Learn how to
                    </div>
                    <div class="subject-cont">
                        <img src="{{ asset('images/divide.png') }}" alt="" srcset="" class="divide-lesson-image">
                    </div>
                </div>
                <div class="divide-desc">
                    <ul>
                        <li class="list div-list">(3) Lesson Tiers</li>
                        <li class="list div-list">(3) Quiz Difficulty Tiers</li>
                    </ul>
                    <a href="{{ url('/lesson-one-div') }}" class="btn btn-success">Start Dividing Now!</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
