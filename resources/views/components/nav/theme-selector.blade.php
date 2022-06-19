<div class="dropdown">
  <a class="btn btn-info dropdown-toggle w-75" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    {{ __('nav.theme.selector.label', ["current" => $current_theme_text]) }}
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    @foreach($themes_available as $name => $text)
      <li><a class="dropdown-item" href="{{ url('session/set/theme?theme=' . $name . '&redirect=' . url()->current()) }}"> {{ $text }}</a></li>
    @endforeach
  </ul>
</div>
