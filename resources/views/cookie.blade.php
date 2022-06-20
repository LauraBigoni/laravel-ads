@extends('layouts.app')

@section('content')
  @include('includes.content')

  {{-- Prendo i cookies --}}
  
  @if (!$visited)
    @include('includes.ads')
  @endif
@endsection
