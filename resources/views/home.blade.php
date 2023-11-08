@extends('layouts.app')

@section('content')
<div class="container-fluid">
    {{-- <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-md-end">{{ __('Dashboard') }}
                    <!-- Right Side Of Navbar -->
                    {{--  --}}
                </div>



            </div>
        </div>
    </div>

</div>
<div class="header">
    <nav class="navbar navbar-light">
        <div class="container position-relative">
            <div class="navbar-brand mb-0 h1">D Barking Zoo</div>
            <div class="card-body position-absolute top-0 start-50">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}
            </div>
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown justify-content-end">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        </div>
    </nav>


</div>
<div class="content">
    <div class="row">
        <div class="col-2 sidebar">
            <div class="about">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, reiciendis aliquam soluta laborum, eaque magnam laudantium adipisci atque exercitationem quibusdam, incidunt dignissimos. Quam laborum ratione reiciendis vero vitae? Incidunt, voluptatem.</p>
            </div>

        </div>
        <div class="col-5 mb-3 m-2 gap-5 mainbar">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/vetconsultation.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  {{-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <a href="#" class="btn btn-primary col-12">CONSULTATION</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/petgrooming.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  {{-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <a href="#" class="btn btn-primary col-12">GROOMING SERVICE</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/pethotel.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  {{-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <a href="#" class="btn btn-primary col-12">PET BOARDING</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/products.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  {{-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <a href="/products" class="btn btn-primary col-12">PRODUCTS</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="footer">
    Footer Section
</div>


@endsection
