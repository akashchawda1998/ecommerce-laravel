<?php 
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>

  <nav class="navbar navbar-dark navbar-fixed-top" style="background-color:#2874f0;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/">Shop Now</a>
                </div>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                  <form class="navbar-form navbar-left" action="/search">
                  @csrf
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>
                    <ul class="nav navbar-nav navbar-right">
                        @if(Session::has('user'))  
                        <li><a href="/cartlist"><span class="glyphicon glyphicon-shopping-cart"></span> Cart({{$total}})<span class="badge"></span></a></li>

                      <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span> {{Session::get('user')['name']}}</a></li>

                      @else

                      <li><a href="/login"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
                      <li><a href="/register"><span class="glyphicon glyphicon-log-out"></span> REgister</a></li>

                      @endif

                    </ul>
                </div>
            </div>
        </nav>
  