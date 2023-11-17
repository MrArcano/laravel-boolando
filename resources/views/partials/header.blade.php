@php
    $menuHeader = config("menues.menuHeader");
    // dump($menuHeader);
    // die;
@endphp

<header>
    <div class="nav-bar container flex-box">
      <div class="text-menu fix-width">
        <ul class="flex-box">
            @foreach ($menuHeader as $item)

            <li>
                <a href={{ route($item['href']) }}>{{ $item['text'] }}</a>
            </li>

            @endforeach

        </ul>
      </div>

      <div class="logo">
        <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="Logo"></a>
      </div>

      <div class="icon-menu fix-width text-right">

        <a href="#"><i class="fa-solid fa-user"></i></a>
        <a href="{{ route('preferiti')}}"><i class="fa-regular fa-heart"></i></a>
        <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>

      </div>
    </div>
  </header>
