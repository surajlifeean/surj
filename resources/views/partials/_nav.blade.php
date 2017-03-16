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
        <li><a href="{{route('blog.index')}}">Blogs</a></li>
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


        
        @if(Auth::check())

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ ucwords(Auth::user()->name)}}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="posts">Posts</a></li>
            <li role="separator" class="divider"></li>


            <li><a href="{{route('categories.index')}}">My Categories</a></li>
            <li role="separator" class="divider"></li>


            <li><a href="{{Url('auth/logout')}}">logout</a></li>
          </ul>

          @else
          <a href="{{Url('auth/login')}}"> Login</a>

          @endif
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
