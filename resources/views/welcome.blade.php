<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href=".\assets\LOGO-AY-24-25\logowhite.png" type="image/png">

    @vite('resources/css/app.css')
</head>

<body class="position-relative min-h-full   ">
    @livewire('header')
    @livewire('main')
    @livewire('footer')
</body>

</html>
