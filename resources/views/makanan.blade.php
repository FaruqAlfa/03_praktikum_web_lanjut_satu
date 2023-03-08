@extends('layouts.app')

@section('makanan')
<div class="container">
    <div class="card" style="width: 18rem;">
      <img src="{{ asset('img')}}/donut.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Dunkin</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi vitae facere deleniti quis beatae nisi consectetur nobis, enim cupiditate unde. Iste corporis hic fuga officia quo reiciendis tenetur, mollitia asperiores.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{ asset('img')}}/puding.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Pudding</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi vitae facere deleniti quis beatae nisi consectetur nobis, enim cupiditate unde. Iste corporis hic fuga officia quo reiciendis tenetur, mollitia asperiores.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{ asset('img')}}/piscok.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Piscok</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, voluptates. Veritatis similique natus, mollitia, id corrupti incidunt, dolorum modi suscipit sunt obcaecati quam numquam nulla esse doloribus soluta quibusdam voluptate.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

   </div>
@endsection