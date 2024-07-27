<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('client.layouts.patials.css')

</head>

<body>

    <div class="site-wrap">
        <header class="site-navbar" role="banner">
			@include('client.layouts.patials.header-top')

			@include('client.layouts.patials.header-nav')
			
        </header>

        @yield('content')

        <footer class="site-footer border-top">
            @include('client.layouts.patials.footer')
        </footer>
    </div>

    @include('client.layouts.patials.js')



</body>

</html>
