<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Leaderboards</title>


    <!-- Styles -->
    <link href="{{ asset('css/leaderboards.css') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</head>

<body>
    <img class="img-leaderboards"src='../images/leaderboards.png' alt="Leaderboards">
    <div class="wrapper">
        <div class="leaderboard">
            <table>
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    @php $count = 1; @endphp
                    @foreach ($leaderboards as $leaderboard)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $leaderboard->name }}</td>
                            <td>{{ $leaderboard->score }}</td>
                        </tr>
                    @endforeach
                    <!-- Add more leaderboard entries as needed -->
                </tbody>
            </table>
        </div>
        <div class="buttons">
            <button type="submit" class="btn btn-light">Quiz Selection</button>
            <button type="button" class="btn btn-light">Home</button>
        </div>
    </div>
</body>

</html>
