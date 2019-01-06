<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('admin.layouts.inc.head')
</head>
<body>
  <div class="app">
      @include('admin.layouts.inc.header')
    <div class="content">
        @include('admin.layouts.inc.aside')
      <main class="main">
        @yield('breadcrumbs')
        @include('admin.layouts.partials.flesh')
        @yield('content')
      </main>
    </div>
  </div>
</body>
</html>
