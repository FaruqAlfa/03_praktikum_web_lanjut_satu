@extends('layouts.app')

@section('card')
<div class="container">
    <div class="card" style="width: 18rem;">
      <img src="{{ asset('img')}}/product.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Product</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{ asset('img')}}/news.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">News</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{ asset('img')}}/program.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Program</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    
    <div class="card" style="width: 18rem;">
      <img src="{{ asset('img')}}/aboutUs.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">About Us</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{ asset('img')}}/contactUs.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Contact Us</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

   </div>
@endsection