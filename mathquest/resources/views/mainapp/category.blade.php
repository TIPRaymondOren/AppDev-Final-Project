@include('mainapp.nav')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Category</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/land.css')}}" rel="stylesheet" type="text/css">
        
        <!-- Bootstrap CDNs -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </head>
   <body style="background-image: url('/images/cabinbg.png');">

   <!-- first card -->
   <div class="card mt-5" style="width: 35%; margin: auto; border-radius: 30px;">
   <h1 class="mt-4 ms-2">
 <img width="70" height="70" class="d-inline-block align-top ms-5 mb-0" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJjb2xvcjpjdXJyZW50Q29sb3IiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgY2xhc3M9ImgtZnVsbCB3LWZ1bGwiPjxyZWN0IHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiByeD0iMzAiIGZpbGw9InRyYW5zcGFyZW50IiBzdHJva2U9InRyYW5zcGFyZW50IiBzdHJva2Utd2lkdGg9IjAiIHN0cm9rZS1vcGFjaXR5PSIxMDAlIiBwYWludC1vcmRlcj0ic3Ryb2tlIj48L3JlY3Q+PHN2ZyB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0iY3VycmVudENvbG9yIiB4PSIwIiB5PSIwIiByb2xlPSJpbWciIHN0eWxlPSJkaXNwbGF5OmlubGluZS1ibG9jazt2ZXJ0aWNhbC1hbGlnbjptaWRkbGUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iY3VycmVudENvbG9yIj48ZyBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIj48cGF0aCBkPSJNOS41IDEuNUgxMWExIDEgMCAwIDEgMSAxdjEwYTEgMSAwIDAgMS0xIDFIM2ExIDEgMCAwIDEtMS0xdi0xMGExIDEgMCAwIDEgMS0xaDEuNSI+PC9wYXRoPjxyZWN0IHdpZHRoPSI1IiBoZWlnaHQ9IjIuNSIgeD0iNC41IiB5PSIuNSIgcng9IjEiPjwvcmVjdD48cGF0aCBkPSJtNC41IDguNWwyIDEuNUw5IDYiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPjwvc3ZnPg==" alt="interface-file-clipboard-check-checkmark-edit-task-edition-checklist-check-success-clipboard-form" style="color:currentColor"></img>
 <span class="fw-bold">  Determine your Mastery! </span>   </h1>
 <p style="margin-left: 135px; ">Choose from the selection below what you want to practice</p>
   </div>


<h1 class="text-center text-light mt-5">I am a Master of...</h1>


   <table style="margin:auto; ">
   <tr>
    <td>
      <a href="{{ url('/land') }}" width="500" height="500" > <img width="500" height="500"src="/images/quizmul.png" /></a></td>
    <td>  <a href="{{ url('/category') }}" width="500" height="500" > <img width="500" height="500"src="/images/quizdiv.png" /></a></td>
  </tr>

</table>

    </body>
</html>
