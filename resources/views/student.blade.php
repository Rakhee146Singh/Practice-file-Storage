<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel & Mysql DB Connection</title>
</head>

<body>
    <?php
    if (DB::connection()->getPdo()) {
        echo 'Successfully connected to DB and DB name is:' . DB::connection()->getDatabaseName();
    }
    ?>
    <br>
    <br>
    {{-- @foreach ($students as $stu)
        {{ $stu->id }}
        {{ $stu->name }}
        {{ $stu->city }}
        {{ $stu->email }}
        {{ $stu->marks }}
        <br>
    @endforeach --}}

    {{ $students->id }}
    {{ $students->name }}
    {{ $students->city }}
    {{ $students->email }}
    {{ $students->marks }}
    <br>
</body>

</html>
