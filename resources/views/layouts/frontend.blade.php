<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="CharityFund - Charity & Crowdfunding HTML Template" />
    <meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>CharityFund - Charity & Crowdfunding HTML Template</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/css-plugin-collections.css')}}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset('css/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{ asset('css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="{{ asset('js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{ asset('js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{ asset('js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="{{ asset('css/colors/theme-skin-yellow.css')}}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{ asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
            <script src="{{ asset('js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset('js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <title></title>
    <script src="{{ asset('js/app.js')}}"></script>
    @livewireStyles
</head>
<body>

    {{$slot}}


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('s/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('s/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>

</body>
</html>
