<!doctype html>

<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <nav>
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/about">About</x-nav-link>
        <x-nav-link href="/contact">Contact</x-nav-link>
    </nav>

    {{  $slot  }}


</body>

</html>