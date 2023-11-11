@extends('layouts.app')

@section('content')

<div class="header bg-info mb-4 pt-2">
    <nav class="navbar navbar-light">
        <div class="container position-relative">
            <div class="navbar-brand mb-2 h1">D Barking Zoo</div>
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
        <div class="col-4 me-3 p-5 sidebar">
            <div class="about" style="width: 30rem">
                <p><strong>Welcome to D Barking Zoo Animal Clinic!</strong></p>
                <p> We are a dedicated team of animal lovers who are passionate about providing top-quality veterinary care for your beloved pets. With a focus on compassion and expertise, we strive to ensure the health and well-being of all the animals that come through our doors.

                    At D Barking Zoo, we offer a range of veterinary services to meet the needs of your furry friends. From routine check-ups and vaccinations to surgeries and dental care, our experienced veterinarians are here to provide comprehensive and personalized care for your pets. We also provide nutritional and behavioral counseling to help your pets thrive.

                    Our clinic is designed to create a comfortable and welcoming environment for both you and your pets. We understand that visiting the vet can be a stressful experience, so we make it a priority to create a calm and friendly atmosphere. Our caring staff is trained in fear-free handling techniques to ensure that your pets feel safe and relaxed during their visit.

                    We believe in the importance of preventive care and educating pet owners on how to best care for their animals. Our team is always available to answer your questions and provide guidance on topics such as nutrition, exercise, and general pet care. We value the trust you place in us to care for your furry family members, and we strive to build lasting relationships with our clients based on trust and open communication.

                    Thank you for choosing D Barking Zoo Animal Clinic for your pet's healthcare needs. We look forward to meeting you and providing exceptional veterinary care for your beloved pets.</p>
            </div>

        </div>
        <div class="col-5 mb-3 m-2 gap-4 p-4 position-relative start-0 justify-content-evenly mainbar">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/vetconsultation.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body bg-info-subtle">
                  {{-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <a href="/consultation/" class="btn btn-primary col-12">CONSULTATION</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/petgrooming.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body bg-info-subtle">
                  {{-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <a href="/grooming_service/" class="btn btn-primary col-12">GROOMING SERVICE</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/pethotel.png')}}" class="card-img-top" alt="...">
                <div class="card-body bg-info-subtle">
                  <span></span>
                  <a href="/pet_boarding/" class="btn btn-primary col-12">PET BOARDING</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/products.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body bg-info-subtle">
                  <span style="color: red"><h6>*Products available in-store only.</h5></span>
                  <a href="/products" class="btn btn-primary col-12">PET SUPPLIES</a>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="footer">
    <div class="row">
        <div class="footer bg-primary col-3"></div>
        <div class="footer bg-info col-3"></div>
        <div class="footer bg-light col-3"></div>
        <div class="footer bg-warning col-3"></div>
    </div>
</div>



    {{-- <div class="spinner-border float-end" role="status">
        <span class="visually-hidden">Loading...</span>
        <div aria-label="Orange and tan hamster running in a metal wheel" role="status" class="wheel-and-hamster">
            <span class="visually-hidden">Loading...</span>
            <div class="wheel"></div>
            <div class="hamster">
                <div class="hamster__body">
                    <div class="hamster__head">
                        <div class="hamster__ear"></div>
                        <div class="hamster__eye"></div>
                        <div class="hamster__nose"></div>
                    </div>
                    <div class="hamster__limb hamster__limb--fr"></div>
                    <div class="hamster__limb hamster__limb--fl"></div>
                    <div class="hamster__limb hamster__limb--br"></div>
                    <div class="hamster__limb hamster__limb--bl"></div>
                    <div class="hamster__tail"></div>
                </div>
            </div>
            <div class="spoke"></div>
        </div>
    </div> --}}




@endsection
