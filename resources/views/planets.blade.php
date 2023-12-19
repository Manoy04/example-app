<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Planeten</title>

</head>

<body>

    <ul>

        @foreach($planets as $planet)

            <li>

                <strong>{{ $planet['name'] }}</strong>: {{ $planet['description'] }}

            </li>

        @endforeach

    </ul>

</body>

</html>



























