@include('mainapp.nav')
<!DOCTYPE html>
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
    <link href="{{ asset('css/easy-quiz.css') }}" rel="stylesheet" type="text/css">

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
                    Practice
                    <p class="topic">
                        Division
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
            <div class="desc-cont">
                <div class="title-cont practice-title">
                    <div class="subject-cont">
                        Division Quiz
                    </div>
                </div>
                <div class="lesson-content">
                    <div class="easy-multiply">
                        <form action="/computeScore" method="POST">
                            @csrf
                            <div class="question">
                                <p>1. 6 ÷ 2 = ?</p>
                                <input type="radio" id="q1_a" name="item-one" value="a">
                                <label for="q1_a">2</label>
                                <input type="radio" id="q1_b" name="item-one" value="b">
                                <label for="q1_b">3</label>
                                <input type="radio" id="q1_c" name="item-one" value="c">
                                <label for="q1_c">4</label>
                                <input type="radio" id="q1_d" name="item-one" value="d">
                                <label for="q1_d">5</label>
                            </div>

                            <div class="question">
                                <p>2. 8 ÷ 4 = ?</p>
                                <input type="radio" id="q2_a" name="item-two" value="a">
                                <label for="q2_a">1</label>
                                <input type="radio" id="q2_b" name="item-two" value="b">
                                <label for="q2_b">2</label>
                                <input type="radio" id="q2_c" name="item-two" value="c">
                                <label for="q2_c">3</label>
                                <input type="radio" id="q2_d" name="item-two" value="d">
                                <label for="q2_d">4</label>
                            </div>

                            <div class="question">
                                <p>3. 7 ÷ 1 = ?</p>
                                <input type="radio" id="q3_a" name="item-three" value="a">
                                <label for="q3_a">5</label>
                                <input type="radio" id="q3_b" name="item-three" value="b">
                                <label for="q3_b">6</label>
                                <input type="radio" id="q3_c" name="item-three" value="c">
                                <label for="q3_c">7</label>
                                <input type="radio" id="q3_d" name="item-three" value="d">
                                <label for="q3_d">8</label>
                            </div>

                            <div class="question">
                                <p>4. 4 ÷ 2 = ?</p>
                                <input type="radio" id="q4_a" name="item-four" value="a">
                                <label for="q4_a">1</label>
                                <input type="radio" id="q4_b" name="item-four" value="b">
                                <label for="q4_b">2</label>
                                <input type="radio" id="q4_c" name="item-four" value="c">
                                <label for="q4_c">3</label>
                                <input type="radio" id="q4_d" name="item-four" value="d">
                                <label for="q4_d">4</label>
                            </div>

                            <div class="question">
                                <p>5. 10 ÷ 5 = ?</p>
                                <input type="radio" id="q5_a" name="item-five" value="a">
                                <label for="q5_a">1</label>
                                <input type="radio" id="q5_b" name="item-five" value="b">
                                <label for="q5_b">2</label>
                                <input type="radio" id="q5_c" name="item-five" value="c">
                                <label for="q5_c">3</label>
                                <input type="radio" id="q5_d" name="item-five" value="d">
                                <label for="q5_d">4</label>
                            </div>
                            <input type="text" id="name" name="name" hidden="true" value="ElChapo">
                            <input type="text" id="difficulty" name="difficulty" hidden="true" value="easy">
                            <button class="btn btn-lg btn-success" type="submit">Submit Answer</button>
                            @csrf
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        var nameInput = document.getElementById("name");
        var nameStored = localStorage.getItem("name");
        nameInput.value = nameStored;
        nameInput.value = "mamamoxd";
    </script>
</body>

</html>
