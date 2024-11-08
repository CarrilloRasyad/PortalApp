<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Portal Aplikasi PBO</title>

    <!-- CSS Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@100..900&display=swap" rel="stylesheet">

    <!-- CSS files -->
    <link href="{{asset ('tabler/dist/css/tabler.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{asset ('tabler/dist/css/tabler-flags.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{asset ('tabler/dist/css/tabler-payments.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{asset ('tabler/dist/css/tabler-vendors.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{asset ('tabler/dist/css/demo.min.css?1692870487')}}" rel="stylesheet"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@100..900&display=swap');
        :root {
            --tblr-font-sans-serif: 'Lexend Giga', sans-serif;
        }
        body {
            font-family: var(--tblr-font-sans-serif);
            /* Sesuaikan fitur font Lexend Giga di sini jika diperlukan */
            font-feature-settings: "your-lexend-giga-features";
        }
    </style>
  </head>
  <body >
    <script src="{{asset('tabler/dist/js/demo-theme.min.js?1692870487')}}"></script>
    <div class="page">
        <!-- Navbar -->
        @include('layout.header')

        <div class="page-wrapper">
            <!-- Page body -->
            @yield('content')
            @include('layout.footer')
      </div>
    </div>
    @include('layout.script')
  </body>
</html>