<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Portfolio</title>
</head>

<body>
    <h1 class="text-3xl font-bold ">Welcome to my Portfolio </h1>

    <h2> My name is {{ $name }}, i am from {{ $address }} <h2>

            You can click link below to watch about and contact
            <div>
                <a href={{ url('/about') }}>about</a> <br />
                <a href={{ url('/contact') }}>contact</a>
                <a href={{ url('/product') }}>product</a>

            </div>


            <img src="{{ asset('portfolio/image.png') }}" alt="tag">






</body>

</html>
