@php
    $menuFooter = config("menues.menuFooter");
@endphp

<footer>
    <div class="container flex-box">
      <div class="col-left">
        <h3>Boolando s.r.l.</h3>
        <ul class="flex-box">
            @foreach ($menuFooter as $item)
            <li>
                <a href="{{ route($item['href']) }}">{{ $item['text'] }}</a>
            </li>
            @endforeach
        </ul>
      </div>
      <div class="col-right">
        <h4>Trovaci anche su</h4>
        <a href="{{ route('home') }}"><i class="fa-brands fa-square-twitter"></i></a>
        <a href="{{ route('home') }}"><i class="fa-brands fa-square-facebook"></i></a>
        <a href="{{ route('home') }}"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="{{ route('home') }}"><i class="fa-brands fa-square-pinterest"></i></a>
        <a href="{{ route('home') }}"><i class="fa-brands fa-square-youtube"></i></a>
      </div>
    </div>
  </footer>
