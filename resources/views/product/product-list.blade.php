@extends('layout')

@section('content')

    <!-- carrousel -->
    <div class="container-md">
        <div class="row">
            <div class="col-lg-4 sm-12 text">
                <p>
                    Envie d'une bonne bière brassée selon les anciennes traditions
                    remontant à l'époque lointaine du déluge? <br/>
                    N'hésitez plus et faites votre choix parmis notre collection !
                </p>
            </div>

            <div class="col-lg-4 sm-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">

                        @foreach($all_products as $product)


                            <button type="button" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide-to="{{$loop->index}}" class="active"
                                    aria-current="true" aria-label="Slide {{$loop->iteration}}"></button>

                        @endforeach

                    </div>


                    <div class="carousel-inner">

                        @foreach($all_products as $product)

                            <div class="carousel-item {{$loop->iteration==1?'active' : ''}}">
                                <a href="/product/{{$product->id}}"><img src="{{$product->picture}}"
                                                                         class="d-block w-100" alt="..." width="400px" height="400px"/></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{$product->name}}</h5>
                                    <div id="{{$product->name}}">
                                        <p>{{$product->description}}</p>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>


                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                        <div class="span-carousel">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </div>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                        <div class="span-carousel">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </div>
                    </button>

                </div>
            </div>
            <div class="col-lg-4 sm-12 text">
                <p>
                    Que ce soit de la brune de caractère ou alors une douce blanche nous
                    somme sur que vous trouverez votre bonheur choissisez celle-qui vous
                    plaira et bonne dégustation!!
                </p>
            </div>
        </div>

@endsection
