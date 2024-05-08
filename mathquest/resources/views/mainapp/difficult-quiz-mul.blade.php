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
    <link href="{{ asset('css/quiz.css') }}" rel="stylesheet" type="text/css">

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
                        <div class="diff-desc fs-1 "><a href="{{ url('/average-quiz-mul') }}"> Average</a></div>
                    </div>
                    <div class="diff-container">
                        <div class="diff-desc fs-1 fw-bold"><a href="{{ url('/difficult-quiz-mul') }}"> Difficult</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quiz-container">
                <div class="title-cont practice-title">
                
                     <h1>Multiplication Difficult Quiz</h1>  
                        <p class="mul-dif-inst" style="font-size: 25px;">Instructions: Type the correct answer on the blank input field</p>            
                    </div>
                <div class="quiz-content">

                    <form action="/computeScore" method="POST">
                        @csrf
                        <label for="item-one" class=" fs-2">1. 4 x 7 = __ </label>
                        <input type="number" id="item-one" name="item-one" required>
                        <br>
                        <label for="item-two" class=" fs-2">2. 7 x 12 = __ </label>
                        <input type="number" id="item-two" name="item-two" required>
                        <br>
                        <label for="item-three" class=" fs-2">3. __ x 100 = 2,400</label>
                        <input type="number" id="item-three" name="item-three" required>
                        <br>
                        <label for="item-four" class=" fs-2">4. 80 ÷ __ = 800 </label>
                        <input type="number" id="item-four" name="item-four" required>
                        <br>
                        <label for="item-five" class=" fs-2 ">5. 475 x 6 = __</label>
                        <input type="number" id="item-five" name="item-five" required>
                        <input type="text" id="name" name="name" hidden="true" value="ElChapo">
                        <input type="text" id="difficulty" name="difficulty" hidden="true" value="difficult">
                        <button class="btn btn-lg btn-success" type="submit">Submit Answer</button>
                        @csrf
                    </form>
                            <div class="submit-btn-container">
                            <button type="submit" class="btn btn-lg btn-success" style="margin-bottom: -200px;">Submit Quiz</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="card mt-5 diff-instr">
            <h2>Instruction:</h2>
            <p>Type the correct answer on the blank input fields.</p>
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
