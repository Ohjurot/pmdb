<div class="dropdown">
  <a class="btn btn-info dropdown-toggle w-75" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="fi fi-{{ $current_lang_symbol }}"></span> {{ __('nav.language.selector.label') }}
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    @foreach($langs_available as $code => $name)
      <li><a class="dropdown-item" href="{{ url('session/set/language?language=' . $code . '&redirect=' . url()->current()) }}"><span class="fi fi-{{ $name[0] }}"></span> {{ $name[1] }}</a></li>
    @endforeach
    @if(count($langs_available) > 0)
      <li><hr class="dropdown-divider"></li>
    @endif
    <li><a class="dropdown-item" href="{{ url('session/set/language?reset&redirect=' . url()->current()) }}">{{ __('nav.language.selector.reset') }}</a></li>
  </ul>
</div>
