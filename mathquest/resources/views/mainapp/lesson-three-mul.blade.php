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
    <link href="{{ asset('css/lesson.css') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</head>

<body class="font-sans antialiased">
    <div class="main-container">
        <div class="content-container">
            <div class="nav-container">
                <div class="nav-title">
                    Learn
                    <p class="topic">
                        Multiplication
                    </p>
                </div>
                <div class="lessons">
                    <div class="lesson-container">
                        <div class="lesson-title">Lesson 1</div>
                        <div class="lesson-desc">Introduction</div>
                    </div>
                    <div class="lesson-container">
                        <div class="lesson-title">Lesson 2</div>
                        <div class="lesson-desc">Continuation</div>
                    </div>
                    <div class="lesson-container"  style="font-weight: bold;">
                        <div class="lesson-title">Lesson 3</div>
                        <div class="lesson-desc">Video Presentation</div>
                    </div>
                </div>
            </div>
            <div class="desc-cont practice-container">
                <div class="title-cont practice-title">
                    <div class="subject-cont">
                        Multiplication Video
                    </div>
                </div>
                <div class="lesson-content">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/h-CC6jDDahQ?si=FeNs6UUdDx2P6IxJ" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="next-btn-container">
                        <div class="text-btn">Go to next page</div>
                        <a href="{{ url('/category') }}" class="next-btn"><img src="{{ asset('images/right-arrow.png') }}"
                                alt="" srcset="" class="next-btn-img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
