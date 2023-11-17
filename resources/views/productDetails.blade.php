@extends('layouts.main')

@section('content')
    <div class="container py-24">
        <div class="product-details">
            <h1>{{$product['brand']}} - {{$product['name']}}</h1>
            <br>
            <div class="flex-box">
                <div class="image">
                    <img src="{{ Vite::asset('resources/img/') . $product['backImage'] }}" alt="">
                </div>
                <div class="text">
                    <h3>Description: </h3>
                    <br>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum aliquid autem reprehenderit ipsa, similique eligendi cumque fugit vel veritatis, esse quae velit doloremque id enim odit quod saepe. Fugit voluptatibus itaque a, ad delectus enim incidunt! Quisquam maiores, voluptates eius possimus ad repellendus dolorem velit natus saepe quia aperiam dolore tempora dolorum non repudiandae tempore cupiditate provident dicta explicabo. Aspernatur quia, repudiandae maxime placeat perspiciatis eligendi rerum culpa non, perferendis asperiores dignissimos corrupti qui! Rerum accusantium cumque quisquam expedita eaque maxime! Possimus nemo molestias ullam corporis itaque dolorem neque eligendi, nesciunt id! Dolorum, voluptate. Nobis veniam error est illum natus!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
