@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">{{ __('app.name.title') }}</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <x-nav.item name="{{ __('nav.entry.home') }}" href="home" />
        <x-nav.item name="Page" href="page" />
      </ul>

      <!-- Search bar -->
      <form class="d-flex" action="!#" method="POST">
        <input class="form-control me-2" type="search" placeholder="&#xF002; {{ __('nav.search.placeholder') }}" style="font-family:Arial, FontAwesome" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">{{ __('nav.search.button') }}</button>
      </form>
    </div>
  </div>
</nav>
@endsection
