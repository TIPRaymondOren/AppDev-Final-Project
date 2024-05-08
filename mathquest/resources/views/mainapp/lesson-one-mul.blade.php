@include('mainapp.nav')
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>

<body class="font-sans antialiased">
    <div class="main-container">
        <div class="title">Math Quest</div>
        <div class="content-container">
            <div class="nav-container">
                <div class="nav-title">
                    Learn
                    <p class="topic">
                        MULTIPLICATION
                    </p>
                </div>
                <div class="lessons">
                    <div class="lesson-container" style="font-weight: bold;">
                        <div class="lesson-title">Lesson 1</div>
                        <div class="lesson-desc">Introduction</div>
                    </div>
                    <div class="lesson-container">
                        <div class="lesson-title">Lesson 2</div>
                        <div class="lesson-desc">Continuation</div>
                    </div>
                    <div class="lesson-container">
                        <div class="lesson-title">Lesson 3</div>
                        <div class="lesson-desc">Video Presentation</div>
                    </div>
                </div>
            </div>
            <div class="desc-cont practice-container">
                <div class="title-cont practice-title">
                    <div class="subject-cont">
                        Multiplication
                    </div>
                </div>
                <div class="lesson-content">
                    <p class="content">is a way of adding numbers together quickly. For example, if we have 3 groups of 4, it means we
                        have 4 added to itself 3 times: 4 + 4 + 4 = 12. This can be written as 3 x 4 = 12, where 3 is
                        the number of groups and 4 is the number being added together.</p>
                    <div class="next-btn-container">
                        <div class="text-btn">Continue to next page</div>
                        <a href="{{ url('/lesson-two-mul') }}" class="next-btn"><img src="{{ asset('images/right-arrow.png') }}" alt=""
                            srcset="" class="next-btn-img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>