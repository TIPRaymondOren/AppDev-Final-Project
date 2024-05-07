<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<style> 
        .navbar-nav.navbar-center { 
            position: absolute; 
            left: 50%; 
            transform: translatex(-50%); 
        } 
    </style> 
</head>


<nav class="navbar navbar-expand-sm navbar-light bg-light " style="width: 50%; margin: auto; border-radius: 0 0 30px 30px; border: 1px solid black; "> 
        <div class="container" > 
            <div class="collapse navbar-collapse mt-5 mb-5"  >
                <ul class=" nav navbar-nav navbar-center"> 
                    <li class="nav-item active"> 
                        <a class="nav-link me-4 mt-5 fs-3 " 
                           href="{{ url('/lesson') }}"> 
                          Learn  
                      </a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" 
                           href="{{ url('/land') }}"> 
                           <img width="200" height="100"src="/images/mqlogo.png" />
                        </a> 
                    </li> 
                    <li class="nav-item mt-5 ms-4 fs-3"> 
                        <a class="nav-link" 
                           href="{{ url('/category') }}"> 
                          Grow
                        </a> 
                    </li> 
                </ul> 
            </div> 
        </div> 
    </nav> 