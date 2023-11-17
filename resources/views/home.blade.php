@php
    $products = config('products');
@endphp

@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="cards flex-box">

            @foreach ($products as $product)
                @include('partials.card')
            @endforeach

        </div>
    </div>
@endsection

@section('title')
    | Homepage
@endsection
