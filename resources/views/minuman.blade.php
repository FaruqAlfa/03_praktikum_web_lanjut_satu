@extends('layouts.app')

@section('card')
<div class="container">
    <div class="card" style="width: 18rem;">
      <img src="{{ asset('img')}}/teh.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Thai Tea</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos expedita, commodi quas debitis animi voluptate officiis. In quasi sed maiores quos magni fugiat a nesciunt dolorem, corrupti cum quae doloremque.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{ asset('img')}}/coklat.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Ais Choco</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos expedita, commodi quas debitis animi voluptate officiis. In quasi sed maiores quos magni fugiat a nesciunt dolorem, corrupti cum quae doloremque.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{ asset('img')}}/smotie.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Smootie</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos facilis non dicta omnis. Exercitationem, atque accusamus. Et voluptate blanditiis tempore, sit, nam illum vero fugiat aut accusantium impedit, numquam cum.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

   </div>
@endsection