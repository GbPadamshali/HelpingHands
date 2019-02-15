<!DOCTYPE html>
<html>
  <head>
    @include('admin.layout.head')
  </head>
<body class="skin-coreplus">

  @include('admin.layout.header')

  {{-- @include('admin.layout.sidebar') --}}

  @yield('content')

  @include('admin.layout.footer')

</body>
</html>
