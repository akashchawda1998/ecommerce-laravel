
@extends('master')
@section("content")
<br>

<br>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="margin-top: -180px;">
    <div class="item active">
      <img src="https://wallpapercave.com/wp/wp2464260.jpg" alt="Organic">
    </div>
    <div class="item">
      <img src="https://www.sparkyjeans.com/assets/images/banner5.jpg" alt="Organic">
    </div>
    <div class="item">
      <img src="https://fashfever.files.wordpress.com/2014/09/hm_denim001.jpeg" alt="Organic">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="wrap">

	<div id="columns" class="columns_4">
  @foreach($products as $item)
 <a href="detail/{{$item['id']}}"> <figure>
  <img src="{{$item['gallery']}}">
	<figcaption><h6>{{$item['name']}}</h6></figcaption>
    <span class="price">Rs{{$item->price}}</span></a>
    <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$item['id']}}>
           <button class="btn btn-success" >Add</></button>
           <button class="btn btn-danger" >Cart</></button>

            </form> 
   
	</figure>
  @endforeach
</div>
@endsection

