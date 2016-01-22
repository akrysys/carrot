
@section('charisma')

    <link id="bs-css" href="/css/charisma/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href='/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href="/css/charisma/charisma-app.css" rel="stylesheet">
    <link href='/css/charisma/jquery.noty.css' rel='stylesheet'>
    <link href='/css/charisma/noty_theme_default.css' rel='stylesheet'>
    <link href='/css/charisma/elfinder.min.css' rel='stylesheet'>
    <link href='/css/charisma/elfinder.theme.css' rel='stylesheet'>
    <link href='/css/charisma/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='/css/charisma/uploadify.css' rel='stylesheet'>
    <link href='/css/charisma/animate.min.css' rel='stylesheet'>

@stop
@section('header')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <title>Carrot - @yield('title')</title>


    <!-- Bootstrap -->
    <script src="/bower_components/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.css"  />
    <script type="text/javascript" src="/js/bootstrap.js"></script>

    @yield('charisma')
@stop
