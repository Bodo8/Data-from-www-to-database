<!DOCTYPE html>
<html>
      <!--lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

   <!--<title>{{ config('app.name') }}</title>-->

    <!-- Fonts -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
   
</head>

<body>
    @yield('content')

</body>

</html>