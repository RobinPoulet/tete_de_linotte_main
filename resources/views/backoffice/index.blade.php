@extends('layout')

@section('content')

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Back office</p>
            <a class="btn btn-primary" href="{{ route('products.create') }}">Créer un produit</a>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                    <tr>
                        <th>Produit</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($all_products as $product)
                        <tr>
                            <td>
                                <strong>{{$product->name}}</strong>
                            </td>
                            <td>
                                <img src="{{$product->picture}}" alt="image du produit" width="100px" height="100px">

                            </td>
                            <td>
                                <a class="btn btn-success" href="{{route('products.show', $product)}}">Voir</a>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{route('products.edit', $product)}}">Modifier</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('products.destroy', $product) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>



@endsection
