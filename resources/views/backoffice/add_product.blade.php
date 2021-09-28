@extends('layout')

@section('content')

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'un produit</p>
        </header>
        <div class="card-content" style="margin-left: 10px">
            <div class="content">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                   placeholder="Nom du produit" value="{{ old('nom') }}">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                                      placeholder="Description du produit">{{ old('description') }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Prix</label>
                        <div class="control">
                            <input type="number" class="form-control @error('price') is-invalid @enderror" name="prix"
                                   placeholder="Prix en centimes" value="{{ old('prix') }}">
                            @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Poid</label>
                        <div class="control">
                            <input type="number" class="form-control @error('weight') is-invalid @enderror"
                                   name="poid" placeholder="Poid du produit en grammes" value="[{{ old('poid') }}">
                            @error('weight')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Photo</label>
                        <div class="control">
                            <input type="text" class="form-control @error('picture') is-invalid @enderror"
                                   name="photos" placeholder="lien de l'image" size="128" value="{{ old('photos') }}">
                            @error('picture')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Quantité</label>
                        <div class="control">
                            <input type="number" class="form-control @error('quantity') is-invalid @enderror"
                                   name="quantity" placeholder="Quantité disponible à la création"
                                   value="{{ old('quantity') }}">
                            @error('quantity')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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

