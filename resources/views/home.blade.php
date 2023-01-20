<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- <h1> Home Page</h1>
    <hr>
    <ul>
        <li><a href="\"> Home </a></li>
        <li><a href="dashboard"> Dashboard </a></li>
        <li><a href="stock"> Stock </a></li>
        <li><a href="report"> Report </a></li>
    </ul> --}}

    {{-- Localization Practice --}}
    <h1> {{ __('home.page') }}</h1>
    <hr>
    <ul>
        <li> {{ __('home.home') }}</li>
        <li> {{ __('home.dashboard') }} </li>
        <li> {{ __('home.stock') }} </li>
        <li> {{ __('home.report') }}</li>
    </ul>
    <h1>{{ __('home.welcome', ['name' => ' Rakhee']) }} </h1>

</body>

</html>
