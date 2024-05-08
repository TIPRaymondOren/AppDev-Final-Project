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
                        Multiplication
                    </p>
                </div>
                <div class="lessons">
                    <div class="lesson-container">
                        <div class="lesson-title">Easy</div>
                    </div>
                    <div class="lesson-container">
                        <div class="lesson-title">Medium</div>
                    </div>
                    <div class="lesson-container">
                        <div class="lesson-title">Hard</div>
                    </div>
                </div>
            </div>
            <div class="desc-cont">
                <div class="title-cont practice-title">
                    <div class="subject-cont">
                        Multiplication Quiz
                    </div>
                </div>
                <div class="lesson-content">
                    <div class="easy-multiply">
                        <form action="" method="post">
                            @csrf
                            <div class="question-1">
                                <p>Question 1</p>
                                <input type="radio" id="q1_a" name="question1" value="a">
                                <label for="q1_a">Option A</label>
                                <input type="radio" id="q1_b" name="question1" value="b">
                                <label for="q1_b">Option B</label>
                                <input type="radio" id="q1_c" name="question1" value="c">
                                <label for="q1_c">Option C</label>
                                <input type="radio" id="q1_d" name="question1" value="d">
                                <label for="q1_d">Option D</label>
                            </div>

                            <div class="question-2">
                                <p>Question 2</p>
                                <input type="radio" id="q2_a" name="question2" value="a">
                                <label for="q2_a">Option A</label>
                                <input type="radio" id="q2_b" name="question2" value="b">
                                <label for="q2_b">Option B</label>
                                <input type="radio" id="q2_c" name="question2" value="c">
                                <label for="q2_c">Option C</label>
                                <input type="radio" id="q2_d" name="question2" value="d">
                                <label for="q2_d">Option D</label>
                            </div>

                            <div class="question-3">
                                <p>Question 3</p>
                                <input type="radio" id="q3_a" name="question3" value="a">
                                <label for="q3_a">Option A</label>
                                <input type="radio" id="q3_b" name="question3" value="b">
                                <label for="q3_b">Option B</label>
                                <input type="radio" id="q3_c" name="question3" value="c">
                                <label for="q3_c">Option C</label>
                                <input type="radio" id="q3_d" name="question3" value="d">
                                <label for="q3_d">Option D</label>
                            </div>

                            <div class="question-4">
                                <p>Question 4</p>
                                <input type="radio" id="q4_a" name="question4" value="a">
                                <label for="q4_a">Option A</label>
                                <input type="radio" id="q4_b" name="question4" value="b">
                                <label for="q4_b">Option B</label>
                                <input type="radio" id="q4_c" name="question4" value="c">
                                <label for="q4_c">Option C</label>
                                <input type="radio" id="q4_d" name="question4" value="d">
                                <label for="q4_d">Option D</label>
                            </div>

                            <div class="question-5">
                                <p>Question 5</p>
                                <input type="radio" id="q5_a" name="question5" value="a">
                                <label for="q5_a">Option A</label>
                                <input type="radio" id="q5_b" name="question5" value="b">
                                <label for="q5_b">Option B</label>
                                <input type="radio" id="q5_c" name="question5" value="c">
                                <label for="q5_c">Option C</label>
                                <input type="radio" id="q5_d" name="question5" value="d">
                                <label for="q5_d">Option D</label>
                            </div>

                            <div class="submit-btn-container">
                                <a href="{{ url('/lesson-two-mul') }}" class="btn btn-light" >Submit Quiz</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
