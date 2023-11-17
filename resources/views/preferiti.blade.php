@php
    $products = config('products');
@endphp

@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center pb-24">Preferiti</h1>
        <div class="cards flex-box">

            @foreach ($products as $product)
                @if($product['isInFavorites'])
                    @include('partials.card')
                @endif
            @endforeach

        </div>
    </div>
@endsection
