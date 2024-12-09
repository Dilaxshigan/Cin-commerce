<header class="header_center">
    <nav class="navbar fixed-top navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" alt="Cinnamon" width="70" height="70"></a>
    <button class="navbar-toggler mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fs-4">
        <li class="nav-item mx-4">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link active" href="{{ route('product') }}">Product</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link active" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item dropdown mx-4">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About us
          </a>
          <ul class="dropdown-menu bg-primary fs-5">
            <li><a class="dropdown-item text-white" href="{{ route('about') }}">About</a></li><hr class="mb-2 text-white">
            <li><a class="dropdown-item text-white" href="{{ route('terms') }}">Terms</a></li><hr class="mb-2 text-white">
            <li><a class="dropdown-item text-white" href="{{ route('return_policy') }}">Return policy</a></li><hr class="mb-2 text-white">
            <li><a class="dropdown-item text-white" href="{{ route('privacy_policy') }}">Privacy policy</a></li>
          </ul>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

