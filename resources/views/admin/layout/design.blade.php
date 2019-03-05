<!doctype html>
<html class="no-js" lang="en">
<head>
  @include('admin.layout.head')
</head>

<body>

  @include('admin.layout.header_sidebar')

  @yield('content')

  @include('admin.layout.footer')

</html>
