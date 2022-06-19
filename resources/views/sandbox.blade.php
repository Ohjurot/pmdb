@extends('skeleton.minimal')

@section('minimal.head')
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
</style>
@endsection

@section('minimal.body')
<!-- Header image and cover -->
<div class="d-none d-lg-block" id="cover-img"></div>
<div id="cover-overlay"></div>

@endsection
