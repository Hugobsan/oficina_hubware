<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina WEB - @yield('title')</title>

    <link rel="shortcut icon" href="{{asset('img/favicon/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset("css/styleformulario.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    @yield('styles')

</head>
<body>
    @include('components.menu')
    @yield('content')
</body>

@yield('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    @if (session('success'))
        alert("{{ session('success') }}");
    @endif
</script>
</html>