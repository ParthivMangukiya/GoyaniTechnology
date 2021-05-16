<!DOCTYPE html>
<html lang="en">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Lemon Impex</title>

        @section('css')
            <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
            <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        @show
    </head>
    <body>
        @if($showLoader ?? false)
        <div id="loader" class="se-pre-con">
            <div class="loader ">Lemon Impex</div>
        </div>
        @endif
        <div id="app">
            {{-- <nav-bar></nav-bar> --}}
            <div class="m-top-minus-navbar">
                @yield('content')
            </div>
            
            {{-- @include('layout.footer') --}}
        </div>

        @section('script')
            <script src="{{ asset('js/app.js')}}"></script>
            <script src="{{ asset('js/theme.js')}}"></script>
            <script src="https://kit.fontawesome.com/c2c939a3fb.js" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous"></script>
        @show
        @if($showLoader ?? false)
            <script>
                $(() => {
                    $("#loader").fadeOut("slow");
                });
            </script>
        @endif
    </body>
</html>
