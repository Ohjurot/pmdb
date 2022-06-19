@extends('skeleton.minimal')

@section('minimal.head')
@yield('cover.head')
<style>
#cover-img {
  /* Position setup */
  position: fixed;
  top: 0;
  left: 0;
  min-height: 100vh;
  min-width: 100vw;
  z-index: -10;

  /* Background img setup */
  background-image: url({{ App\PMDB\Cover::getCoverImageUrl() }});
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

#cover-overlay {
  /* Position setup */
  position: fixed;
  top: 0;
  left: 0;
  min-height: 100vh;
  min-width: 100vw;
  z-index: -1;

  /* Background color  */
  background-color: var(--bs-primary);
  opacity: 0.6;
}

#cover-container {
  min-height: 100vh;
}

#cover-data {
  display: flex;
  align-items: center;
  min-height: 100vh;
}

#cover-disclaimer {
  position: fixed;
  left: 0;
  bottom: 0;
  z-index: 0;
  min-width: 100vw;
  padding: 1em;
  background-color: var(--bs-primary);
}

#cover-disclaimer-content {
  display: inline;
  min-width: 100vw;
}

</style>
@endsection

@section('minimal.body')
<!-- Header image and cover -->
<div class="d-none d-lg-block" id="cover-img"></div>
<div id="cover-overlay"></div>

<!-- Main container -->
<div class="container-md" id="cover-container">
  <div class="align-middle" id="cover-data">
    <div class="card bg-light" style="width: 100%">
      <div class="card-body">
        <!-- Content -->
        @yield('cover.body')
      </div>
    </div>
  </div>
</div>

<!-- Disclaimer -->
<div id="cover-disclaimer">
  <div id="cover-disclaimer-content">
    &copy; Copyright 2022 the <a style="color: inherit;" href="https://github.com/Ohjurot/pmdb" target="blank">PMDB Project</a> by Ludwig F&uuml;chsl -
    {{ __('nav.tmdb.discalimer.text') }}
    <a class="color: inherit; text-decoration: none;" href="https://www.themoviedb.org" target="blank">
      <img src="https://www.themoviedb.org/assets/2/v4/logos/v2/blue_square_1-5bdc75aaebeb75dc7ae79426ddd9be3b2be1e342510f8202baf6bffa71d7f5c4.svg" height="15em" alt="The Movie DB" />
    </a> <div style="float: right;" class="d-none d-lg-block"> {{ __('nav.tmdb.discalimer.thisimg') }} </div>
  </div>
</div>
@endsection
