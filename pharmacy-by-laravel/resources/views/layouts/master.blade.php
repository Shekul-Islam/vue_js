<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Blank - Layout | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('css/theme.css')}}">
    <link rel="stylesheet" href="{{ asset('css/editors/quill.css')}}">


</head>

<body class="nk-main ">
     <!-- wrap  -->
     <div class="nk-wrap ">

        @include('includes.navbar')

        @include('includes.sidebar')

        <!-- content -->
        <section class="nk-content ">
            @yield('content')
        </section>
        <!-- content -->

    </div>
    <!-- wrap -->


    <!-- app-root -->
    <!-- JavaScript -->
    <script src="{{ asset('js/bundle.js')}}"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
    <script src="{{ asset('js/quill.js')}}"></script>
    <script src="{{ asset('js/charts/gd-pharmacy.js')}}"></script>





</body>

</html>
