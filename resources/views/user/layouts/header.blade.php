<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @stack('head')
</head>
<body>

{{-- header start --}}

    header section



{{-- header ends --}}
<div>
    @yield('content')
</div>

@include('user.layouts.footer')

</body>
</html>
