<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>@yield('title')</title>
</head>
<body>
  @include('navbar')
  <div class="container mx-auto">
    @yield('content')
  </div>
</body>
<script>
  const navbarMenu = document.querySelector('#navbar-menu');
  const navbarButton = document.querySelector('#navbar-button');

  navbarButton.addEventListener('click', () => {
    navbarMenu.classList.toggle('hidden');
    navbarButton.querySelector('.hamburger').classList.toggle('active')
  });
</script>
</html>