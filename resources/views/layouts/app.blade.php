<!DOCTYPE html>
<html lang="en">
<head>
  @include('include.meta')
  <title>@yield('title') | Landing Page</title>

  <!-- Favicon -->
  <link rel="apple-touch-icon" href="">
  <link rel="stylesheet" href="" type="image/x-icon">

  @stack('before-style')
  <!-- style -->
  @include('includes-style')
  @stack('after-style')
</head>
<body>
</body>
</html>