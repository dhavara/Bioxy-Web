<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <style>
      body {
          position: relative; 
      }
      h4{
          color: black;
      }
      p{
          color: black;
      }
      .bioxydiv{
        width:750px;
        height:300px;
      }
      </style>
  </head>
  <body class="container bg-secondary text-white">
    @include("layout.conavigation")
      <div class="container pt-5">
          
        @yield('main_content')

      </div>
  </body>
</html>