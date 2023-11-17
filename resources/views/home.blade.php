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
                        @forelse ($product['badges'] as $badge)
                            <span class="badge {{ $badge['type']=== 'tag' ? 'badge-green' : 'badge-red'}}">{{ $badge['value'] }}</span>
                            @php
                                if(empty($product['withDiscount'])){
                                    $product['withDiscount'] = false;

                                    if($badge['type'] ==='discount'){
                                        $product['withDiscount'] = true;
                                    }
                                }
                            @endphp
                        @empty
                            @php
                                $product['withDiscount'] = false;
                            @endphp
                        @endforelse
                    </div>
                </div>

                <div class="card-bot">
                    <span class="brand block-box">{{ $product['brand'] }}</span>
                    <span class="name-item block-box">{{ $product['name'] }}</span>

                    @php
                        $final_price= $product['price'];
                        if($product['withDiscount'])
                        {
                            $discount = -(int)$product['badges'][0]['value']/100;
                            $final_price *= 1 - $discount;
                        }
                    @endphp
                    {{-- bcadd(num1,num2,decimal) somma num1 e num2 e restituisce con "decimal" numeri dopo la virgola --}}
                    <span class="new-price">{{ bcadd($final_price,0,2) }}&euro;</span>

                    @if($product['withDiscount'])
                    <span class="old-price">{{ $product['price'] }}&euro;</span>
                    <span>ciao</span>
                    @endif
                </div>
            </div>
            <!-- fine card -->

            @endforeach
        </div>
    </div>
@endsection
