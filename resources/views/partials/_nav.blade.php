
<!-- NavBar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/">WebDev</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="/">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/blog">Blog</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/about">About</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/contact">Contact</a>
</li>
<button class="navbar-toggler top-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
<ul class="navbar-nav mr-auto">
</ul>
<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
<!-- Authentication Links -->
@guest
<li class="nav-item">
<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>
@if (Route::has('register'))
<li class="nav-item ">
    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
</li>
@endif
@else
<li class="nav-item dropdown top-right">
<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
My account <span class="caret"></span>
</a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="#">
{{ Auth::user()->name }}
</a>
<a class="dropdown-item" href="#">
Profile
</a>
<a class="dropdown-item" href="#">
settings
</a>
<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</div>
</li>
@endguest
</ul>
</div>
</ul>
<!-- <form class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form> -->
</div>
</nav>
<br>