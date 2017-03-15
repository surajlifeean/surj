@include('partials._head')
@include('pages.contact')

  <body>
 @include('partials._nav')

<h1></h1>
<div class="container">

   @include('partials._messages')

   
   @yield('content')



   
   <hr>
   <p class="text-center">Copyright Techie'sfoo-All Rights Reserved</p>

</div>  

     @include('partials._footer') 

     @yield('scripts')
  </body>
</html>