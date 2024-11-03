<!DOCTYPE html>
<html lang="en">
<!-- ======= Start head ======= -->
    @include('layouts.head')
<!-- ======= End head ======= -->
<body>

  <!-- ======= Header ======= -->
  @include('layouts.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('layouts.sidebare')
  <!-- End Sidebar-->

<!-- Start #main -->
<main id="main" class="main" style="min-height:100vh;">
    @yield('content')
</main>

<!-- End #main -->

<!-- ======= footer ======= -->
@include('layouts.footer')
<!-- ======= End footer ======= -->


<!-- ======= Scripts ======= -->
@include('layouts.scripts')
<!-- ======= End Scripts ======= -->



</body>

</html>
