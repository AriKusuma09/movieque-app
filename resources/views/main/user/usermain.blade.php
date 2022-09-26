<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}

        {{-- My CSS --}}
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

        {{-- Boxicons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        

    {{-- End CSS --}}

    {{-- Title --}}
    <title>Movieque</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo.png') }}">
</head>
<body>

{{-- Body --}}
     @include('main.parts.user.navbar')
        @yield('user')
     @include('main.parts.user.footer')
{{-- End Body --}}



    {{-- JS --}}

        {{-- My JS --}}
        <script src="{{ asset('/assets/js/script.js') }}"></script>

    {{-- End JS --}}

</body>
</html>
