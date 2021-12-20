<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? "3D FDM"}}</title>
    <link rel="stylesheet" href="{{asset('css/main.css?debug='.mt_rand(0,100000000))}}">
    @yield('links')
</head>
<body>
    @yield('content')



    @yield('scripts')
</body>
</html>