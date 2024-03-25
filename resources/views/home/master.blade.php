<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.includes.meta')
      <title>@yield("title")</title>
      @include('home.includes.css')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.includes.header')
         <!-- banner section start -->
         {{-- @include('home.includes.banner') --}}
      </div>
      <!-- header section end -->

      @yield('body')

      <!-- footer & copyroght section start -->
      @include('home.includes.footer')
      <!-- copyright section end -->
      @include('home.includes.js')
   </body>
</html>
