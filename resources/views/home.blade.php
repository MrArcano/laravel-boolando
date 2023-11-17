@php
    $products = config('products');
@endphp

@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="cards flex-box">

            @foreach ($products as $product)

            <!-- inizio card -->
            <div class="card">
              <div class="card-top">
                <div class="card-image">
                  <img src="{{ Vite::asset('resources/img/') . $product['frontImage']}}" alt="{{$product['frontImage']}}">
                  <img src="{{ Vite::asset('resources/img/') . $product['backImage']}}" alt="{{$product['backImage']}}">
                </div>

                <div class="hearth {{ $product['isInFavorites'] ? 'active' : ''}}">
                    <span>&hearts;</span>
                </div>

                <div class="badge-box">
                    @foreach ($product['badges'] as $badge)
                    <span class="badge {{ $badge['type']=== 'tag' ? 'badge-green' : 'badge-red'}}">{{ $badge['value'] }}</span>
                    @endforeach
                </div>
              </div>

              <div class="card-bot">
                <span class="brand block-box">{{ $product['brand'] }}</span>
                <span class="name-item block-box">{{ $product['name'] }}</span>
                <span class="new-price">{{ $product['price'] }}&euro;</span>
              </div>
            </div>
            <!-- fine card -->

            @endforeach
        </div>
    </div>
@endsection
