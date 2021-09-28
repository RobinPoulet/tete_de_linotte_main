@extends('layout')

@section('css_optionnel')

    <link rel="stylesheet" href="{{asset('Styles\biere.css')}}" />

@endsection

@section('content')

    <!-- Container-bière -->
    <div class="container-fluid">
        <h1 class="titre-biere">{{$product->name}}</h1>
        <div class="row" id="biere">

            <!-- Col1-image-bière -->
            <div class="col-12 col-lg-4 d-flex justify-content-center" id="col1">
                <img
                    class="photo-bieres"
                    src="{{$product->picture}}"
                    alt="photo-biquette"
                />
            </div>

            <!-- Col2-description-bière -->
            <div class="col-12 col-lg-8" id="col2">
          <span class="description">
            <p>
             {{$product->description}}
            </p>
              <p>
                 @if($product->available)
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

                <!-- Table-prix-bière -->
                <table class="table-prix">
                    <thead>
                    <tr>
                        <th scope="col" class="except">{{$product->name}}</th>
                        <th scope="col">
                            Bouteille <br />
                            (33 cL)
                        </th>
                        <th scope="col">
                            Bouteille <br />
                            (75 cL)
                        </th>
                        <th scope="col">
                            PerfectDraft <br />
                            (6L)
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" class="except">Prix</th>
                        <td>{{$product->price}}</td>
                        <td>{{($product->price)*2.5}}</td>
                        <td>{{($product->price)*7}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="except">Quantité</th>
                        <td>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Choisir"
                            />
                        </td>
                        <td>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Choisir"
                            />
                        </td>
                        <td>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Choisir"
                            />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="except">Montant total</th>
                        <td><input
                                type="text"
                                class="form-control"
                                placeholder="Afficher"
                            />
                        </td>
                        <td><input
                                type="text"
                                class="form-control"
                                placeholder="Afficher"
                            />
                        </td>
                        <td><input
                                type="text"
                                class="form-control"
                                placeholder="Afficher"
                            />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="except"></th>
                        <td>
                            <button type="submit" class="btn btn-outline-dark">Ajouter au panier</button>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-outline-dark">Ajouter au panier</button>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-outline-dark">Ajouter au panier</button>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Boutton-commander -->
                <a
                    class="btn btn-dark"
                    id="commander"
                    href="panier.html"
                    role="button"
                >Passer la commande</a
                >

                <!-- Boutton-retour-catalogue -->
                <a
                    class="btn btn-dark"
                    id="retour"
                    href="/product"
                    role="button"
                >Retour au catalogue</a
                >
            </div>
        </div>
    </div>
@endsection
