@extends('layout')

@section('css_optionnel')

    <link rel="stylesheet" href="{{asset('Styles\biere.css')}}" />

@endsection

@section('content')


    <div class="container-fluid">
        <h1>{{$product->name}}</h1>
        <div class="row" id="biere">

            <!-- Col1-image-product -->
            <div class="col-12 col-lg-4 d-flex justify-content-center" id="col1">
                <img
                    class="photo-bieres"
                    src="{{$product->picture}}"
                    alt="photo-biquette"
                />
            </div>

            <!-- Col2-description-product -->
            <div class="col-12 col-lg-8" id="col2">
          <span class="description">
            <p>
             {{$product->description}}
            </p>
              <p>
                 @if($product->quantity > 0)
                      Le produit est disponible à la vente
                  @else
                      Le produit n'est pas disponible à la vente
                  @endif
              </p>
              <p>Stock disponible : {{$product->quantity}}</p>
          </span>
                <span class="specificites">
            <b>{{$product->categorie_id}}</b>
          </span>

                <!-- prix-product -->

                        <p>Prix du produit : {{$product->price}}</p>

            </div>
        </div>
    </div>
@endsection
