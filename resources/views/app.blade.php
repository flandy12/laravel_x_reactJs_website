<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	  <link href="{{ asset('/css/tiny-slider.css') }}" rel="stylesheet">
	  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('/js/tiny-slider.js') }}"></script>
		<script src="{{ asset('/js/custom.js') }}"></script>

    @vite('resources/js/app.jsx')
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>