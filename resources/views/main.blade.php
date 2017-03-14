@include('partials._head')
@include('pages.contact')

  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
   <!--  Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Services <span class="sr-only"></span></a></li>
        <li><a href="blog">Blogs</a></li>
        <li><a href="#Process">Process</a></li>
        


           </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#work">Work</a></li>
        <li><a href="#Testimonials">Corporate Funda</a></li>
        <li><a  data-toggle="modal" data-target="#myModal" href="#">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="posts">Posts</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


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