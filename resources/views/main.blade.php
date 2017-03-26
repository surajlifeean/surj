@include('partials._head')
@include('pages.contact')

  <body  style="background-color:#FCFBE3">
 @include('partials._nav')

<h1></h1>
<div class="container" style="background-color:white" >

   @include('partials._messages')

   
   @yield('content')



   
   <hr>
   
</div>  
<p class="text-center" >Copyright Techie'sfoo-All Rights Reserved</p>


     @include('partials._footer') 

     @yield('scripts')
  </body>
</html>