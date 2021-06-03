@extends('home')
@section('content')
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
          {{-- {{dump($produits)}} --}}
          @foreach($produits as $produit)
              
         
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="{{ asset('produits/'.$produit->photo_principale) }}" alt="card image cap">

            <div class="card-body">
                <p class="card-text">{{$produit->nom}} <br> {{$produit->description}}</p>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
