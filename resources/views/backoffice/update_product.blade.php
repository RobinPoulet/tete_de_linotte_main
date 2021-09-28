@extends('layout')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un produit</p>
        </header>
        <div class="card-content" style="margin-left: 10px">
            <div class="content">
                <form action="{{ route('products.update', $product) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                            <input  type="text" name="name" value="{{$product->name}}" size="50px">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description">{{$product->description}} </textarea>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Prix</label>
                        <div class="control">
                            <input  type="number" name="prix" value="{{$product->prix}}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Poid</label>
                        <div class="control">
                            <input  type="number" name="poid" value="{{$product->poid}}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Photo</label>
                        <div class="control">
                            <input  type="text" name="photos" size="128" value="{{$product->photos}}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Quantité</label>
                        <div class="control">
                            <input  type="number" name="quantity" value="{{$product->quantity}}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Disponible à la vente</label>
                        <div class="control">
                            <select name="available">
                                <option value="1" >Oui</option>
                                <option value="0" {{!$product->available ? 'selected' : ''}}>Non</option>
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Catégorie du produit</label>
                        <div class="control">
                            <select name="categorie_id">
                                <option value="1">1</option>
                                <option value="2" {{$product->categorie_id == 2 ? 'selected' : ''}}>2</option>
                                <option value="3" {{$product->categorie_id == 3 ? 'selected' : ''}}>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-link" style="margin-top: 15px">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

