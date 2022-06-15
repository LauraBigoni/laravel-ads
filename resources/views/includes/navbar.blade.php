<div class="container">
  <nav class="navbar d-flex justify-content-between">
    {{-- Logo --}}
    <div class="logo d-flex align-items-center">
      <img src="{{ asset('images/spotify-logo.png') }}" alt="Spotify Logo">
      <h1 class="font-weight-bold d-inline pl-4">Spotify<sup>&reg;</sup></h1>
    </div>
    <div class="nav-links">
      {{-- links --}}
      <ul class="list-unstyled d-flex mb-0 align-items-center">
        <li class="font-weight-bold" role="button"><a class="nav-link" href="{{ route('cookie') }}">Cookie</a>
        </li>
        <li>|</li>
        <li class="font-weight-bold" role="button"><a class="nav-link" href="{{ route('session') }}">Session</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
