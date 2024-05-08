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
    <link href="{{ asset('css/quiz.css')}}" rel="stylesheet" type="text/css">

    <!-- Bootstrap CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>

<body class="font-sans antialiased">
    <div class="main-container">
        <div class="content-container">
            <div class="nav-container">
                <div class="nav-title fs-4 fw-bold">
                        Practice
                    <p class="topic fs-4 fw-bold">
                        DIVISION
                    </p>
                </div>
                <div class="lessons">
                    <div class="lesson-container">
                        <div class="lesson-desc fs-1">Easy</div>
                    </div>
                    <div class="lesson-container">
                        <div class="lesson-desc fs-1 fw-bold">Average</div>
                    </div>
                    <div class="lesson-container">
                        <div class="lesson-desc fs-1">Difficult</div>
                    </div>
                </div>
            </div>
            <div class="desc-cont practice-container">
                <div class="title-cont practice-title">
                
                     <h1>Average Questions</h1>  
                
                </div>
                <div class="lesson-content">
                    
                <form action="/submitScore" method="POST">
                    <label for="item-one" class=" fs-2">1. 24 ÷ 3 = </label>
                    <input type="text" id="item-one" name="item-one"  minlength="1" maxlength="1">
                    <br>
                    <label for="item-two" class=" fs-2">2. 72 ÷ 8 = </label>
                    <input type="text" id="item-two" name="item-two" minlength="1" maxlength="1">
                 
                    <br>
                    <label for="item-three" class=" fs-2">3. 63 ÷ 9 = </label>
                    <input type="text" id="item-three" name="item-three" minlength="1" maxlength="1">
                    <br>
                    <label for="item-four" class=" fs-2">4. 96 ÷ 6 = </label>
                    <input type="text" id="item-four" name="item-four" minlength="1" maxlength="1">
                    <br>
                    <label for="item-five" class=" fs-2">5. 120 ÷ 10 = </label>
                    <input type="text" id="item-five" name="item-five" minlength="1" maxlength="1" >
                </div>
              
                </div>
            </div>
            <div class="card mt-5 choices" >
            <h2>Instruction:</h2>
            <p>Choose the correct letter of the answer from the choices below.</p>
                            <h2>Choices:</h2>
                            <table>
                                <tr>
                                    <td>
                                    <p class="choice-proper">A. 15</p>
                                    <p class="choice-proper">B. 12</p>
                                    <p class="choice-proper">C. 9</p>
                                    <p class="choice-proper">D. 6</p>
                                    <p class="choice-proper">E. 7</p>
                                    <p class="choice-proper">F. 8</p>
                                    <p class="choice-proper">G. 10</p>
                                    <p class="choice-proper">H. 6</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="choice-proper">I. 21</p>
                                    <p class="choice-proper">J. 66</p>
                                    <p class="choice-proper">K. 38</p>
                                    <p class="choice-proper">L. 6</p>
                                    <p class="choice-proper">M. 111</p>
                                    <p class="choice-proper">N. 64</p>
                                    <p class="choice-proper">O. 95</p>
                                    <p class="choice-proper">P. 5</p>
                                    </td>
                            </tr>
                            </table>
                    </div>
            
        </div>
    </div>

    <div class="submit-btn-container" >
               <button type="submit" class="btn btn-lg btn-success">Submit Quiz</button> 
               </div>
</body>

</html>