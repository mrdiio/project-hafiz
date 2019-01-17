<!DOCTYPE html>
<html lang="en">
@include('layouts/partials/header')
<body>
@include('layouts/partials/navbar')

<main style="min-height:530px">
  @yield('content')
</main>


@include('layouts/partials/footer')
@include('layouts/partials/script')
</body>
</html>
