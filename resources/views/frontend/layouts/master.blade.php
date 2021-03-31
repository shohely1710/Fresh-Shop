<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

   @include('frontend.layouts.partials.styles')

</head>

<body>

@include('frontend.layouts.partials.top-menu')

@include('frontend.layouts.partials.header')

@include('frontend.layouts.partials.search')

  @yield('content')

@include('frontend.layouts.partials.footer')


<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

@include('frontend.layouts.partials.scripts')
</body>

</html>
