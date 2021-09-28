<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Description-référencement -->
    <meta
        name="description"
        content="Ici, nous vendons de la bière de qualité alors préparez votre palais car vous risquez d'être surpris de la meilleure des façons!"
    />

    <!-- Bootstrap-5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous"
    />

    <!-- Sheet-CSS -->
    <link rel="stylesheet" href="{{asset('Styles/biere.css')}}"/>

    @yield('css_optionnel')

    <title>Bières de la Brasserie Noé</title>
</head>
<body>

{{--@include('navbar')--}}

@yield('content')

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"
></script>
</body>
</html>
