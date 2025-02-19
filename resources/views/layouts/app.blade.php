<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
                                    {{-- bu navbar --}}
<body class="flex flex-col min-h-screen bg-gray-100">
  @include('partials.navbar')


  {{-- content --}}
 @yield('content')




 {{-- footer --}}
 @include('partials.footer')