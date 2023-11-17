@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="cards flex-box">

            {{-- <Card v-for="(card , index) in cardsData" :key="'card-' + index" :card="card"/> --}}

            <!-- inizio card -->
            <div class="card">
              <div class="card-top">
                <div class="card-image">
                  {{-- <img :src="getUrl('')" :alt="'img' + card.src">
                  <img :src="getUrl('b')" :alt="'img' + card.src + 'b'"> --}}
                </div>

                <div class="hearth">
                    <span>&hearts;</span>
                </div>

                <div class="badge-box">
                  {{-- <span v-if="card.badgeRed" class="badge badge-red">{{ card.badgeRed }}</span>
                  <span v-if="card.badgeGreen" class="badge badge-green">{{ card.badgeGreen }}</span> --}}
                </div>
              </div>

              <div class="card-bot">
                {{-- <span class="brand block-box">{{ card.brand }}</span>
                <span class="name-item block-box">{{ card.text }}</span>
                <span class="new-price">{{ card.newPrice }}&euro;</span>
                <span v-if="card.oldPrice" class="old-price">{{ card.oldPrice }}&euro;</span> --}}
              </div>
            </div>
            <!-- fine card -->
        </div>
    </div>
@endsection
