<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@yield ('title') </title>

  @include('frontend.layout.style')

</head>

<body>
  <!-- Menu  Start  -->
  @include('frontend.layout.Menu.menu')

  <!-- Menu  End -->

  @section('maincontent')
  @show

  <!-- Footer  Start -->
@include('frontend.layout.Footer.footer')
  <!-- Footer End -->

  @include('frontend.layout.script')

</body>

</html>
