@extends('skeleton.minimal')

@section('minimal.head')
  <title>{{ __('app.name.short') }}</title>
  @yield('default.head')
@endsection

@section('minimal.body')
  @include('skeleton.header')
    <div class="container">
      @yield('default.body')
    </div>
    @include('skeleton.footer')
@endsection
