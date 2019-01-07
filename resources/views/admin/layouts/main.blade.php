

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('admin.layouts.inc.head')
</head>
<body>
  <div class="app">
    @include('admin.layouts.inc.aside')
    <main class="main">
      @yield('content')
    </main>
  </div>
</body>
</html>