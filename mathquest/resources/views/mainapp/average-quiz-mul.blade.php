@include('mainapp.nav')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ave-quiz.css') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Custom JS -->
    <script src="{{ asset('js/ave-quiz.js') }}"></script>
</head>

<body class="font-sans antialiased">
    <div class="main-container">
        <div class="content-container">
            <div class="nav-container">
                <div class="nav-title fs-4 fw-bold">
                    Practice
                    <p class="topic fs-4 fw-bold">
                        MULTIPLICATION
                    </p>
                </div>
                <div class="difficulty-list">
                    <div class="diff-container">
                        <div class="diff-desc fs-1"><a href="{{ url('/easy-quiz-mul') }}"> Easy</a></div>
                    </div>
                    <div class="diff-container">
                        <div class="diff-desc fs-1 fw-bold"><a href="{{ url('/average-quiz-mul') }}"> Average</a></div>
                    </div>
                    <div class="diff-container">
                        <div class="diff-desc fs-1"><a href="{{ url('/difficult-quiz-mul') }}"> Difficult</a></div>
                    </div>
                </div>
            </div>
            <div class="quiz-container">
                <div class="title-cont practice-title">
                    <h1>Average Questions</h1>
                </div>
                <div class="lesson-content">
                    <form action="/takeInformation" method="POST">
                        @csrf
                        <label for="item-one" class=" fs-2">1. 9 × 6 = </label>
                        <input type="text" id="item-one" name="item-one" minlength="1" maxlength="1">
                        <br>
                        <label for="item-two" class=" fs-2">2. 7 × 8 = </label>
                        <input type="text" id="item-two" name="item-two" minlength="1" maxlength="1">
                        <br>
                        <label for="item-three" class=" fs-2">3. 5 × 11 = </label>
                        <input type="text" id="item-three" name="item-three" minlength="1" maxlength="1">
                        <br>
                        <label for="item-four" class=" fs-2">4. 12 × 4 = </label>
                        <input type="text" id="item-four" name="item-four" minlength="1" maxlength="1">
                        <br>
                        <label for="item-five" class=" fs-2">5. 10 × 9 = </label>
                        <input type="text" id="item-five" name="item-five" minlength="1" maxlength="1">
                        <br>
                        <button class="btn btn-lg btn-success" type="submit" onclick="computeScore()">Submit Answer</button>
                        @csrf
                    </form>
                    <div class="card choices">
                        <h2>Instruction:</h2>
                        <p>Choose the correct letter of the answer from the choices below.</p>
                        <h2>Choices:</h2>
                        <div class="flex-row">
                            <p class="choice-proper">A. 45 |</p>
                            <p class="choice-proper">B. 77 |</p>
                            <p class="choice-proper">C. 48 |</p>
                            <p class="choice-proper">D. 36 |</p>
                            <p class="choice-proper">E. 110 |</p>
                            <p class="choice-proper">F. 63 |</p>
                            <p class="choice-proper">G. 90 |</p>
                            <p class="choice-proper">H. 55 |</p>
                            <p class="choice-proper">I. 54 |</p>
                            <p class="choice-proper">J. 66 |</p>
                            <p class="choice-proper">K. 38 |</p>
                            <p class="choice-proper">L. 6 |</p>
                            <p class="choice-proper">M. 111 |</p>
                            <p class="choice-proper">N. 64 |</p>
                            <p class="choice-proper">O. 95 |</p>
                            <p class="choice-proper">P. 56 |</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>
