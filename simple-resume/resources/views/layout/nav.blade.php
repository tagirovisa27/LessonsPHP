<header class="bg-blue">
    <nav class="wrapper">
      @forelse ($menu as $item)
        <a href="{{ $item['href'] }}">{{ $item['title'] }}</a>
      @empty
      @endforelse
      {{-- <a href="#my_portfolio">Портфолио</a>
      <a href="#about">Обо мне</a>
      <a href="#discussions">Контакты</a> --}}
    </nav>
  </header>
