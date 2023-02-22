<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>@yield('title')</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')

</head>
<body>
  <!-- Navbar -->
  @include('includes.navbar')
  {{-- Content --}}
  @yield('content')
  {{-- Footer --}}
  @include('includes.footer')

  {{-- Javascript --}}
  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')

</body>
</html>
