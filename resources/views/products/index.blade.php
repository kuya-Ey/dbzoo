@extends('layouts.app')

@section('content')
<div class="container d-flex gap-1 flex-wrap">
    @foreach ($products as $product)
    <div class="card" style="width: 18rem;">
        <img src= {{asset("storage/". $product->images)}} width="200px" height="200px" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">{{$product->description}}</p>
          <p class="card-text">{{$product->quantity}}</p>
          <p class="card-text">{{$product->price}}</p>
          <p class="card-text">{{$product->category}}</p>

        </div>
      </div>


    @endforeach

</div>
@endsection

