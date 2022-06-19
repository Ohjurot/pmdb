@section('copyright_bar')
<section>
  <div class="text-center bg-secondary p-3">
    {{ __('nav.tmdb.discalimer.text') }}
    <div class="p-1"></div>
    <a href="https://www.themoviedb.org" target="blank">
      <img width="500em" class="img-fluid" alt="The Movie DB" src="https://www.themoviedb.org/assets/2/v4/logos/v2/blue_long_2-9665a76b1ae401a510ec1e0ca40ddcb3b0cfe45f1d51b77a308fea0845885648.svg">
    </a>
    <div class="p-2"></div>
    &copy; Copyright 2022 the <a style="color: inherit;" href="https://github.com/Ohjurot/pmdb" target="blank">PMDB Project</a> by Ludwig F&uuml;chsl
  </div>
</section>
@endsection
