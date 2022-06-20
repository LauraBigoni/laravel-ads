@extends('layouts.app')

@section('content')
  @include('includes.content')

  {{-- Prendo i cookies --}}
  @include('includes.ads')
  {{-- <?php echo Cookie::get('laravel_ads_session'); ?> --}}
@endsection
