@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="header bg-info mb-4 pt-2 pb-2">
    <nav class="navbar navbar-light position-relative">
        <div class="container position-relative">
            <div class="container">
                <span class="navbar-brand mb-0 h1">D Barking Zoo</span>
            </div>

            <div class="card-body position-absolute top-0 start-50 justify-content-center">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('Welcome back, dear guest!') }}
            </div>

            <div class="d-grid d-md-flex justify-content-md-end">
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
        </div>
    </nav>
</div>
</div>
<div class="content">
    <div class="row">
        <div class="col-4 p-5 sidebar">
            <div class="about" style="width: 30rem">
                <p><strong><h3>Welcome to D Barking Zoo Animal Clinic!</h3></strong></p>
                <p> We are a dedicated team of animal lovers who are passionate about providing top-quality veterinary care for your beloved pets. With a focus on compassion and expertise, we strive to ensure the health and well-being of all the animals that come through our doors.

                    At D Barking Zoo, we offer a range of veterinary services to meet the needs of your furry friends. From routine check-ups and vaccinations to surgeries and dental care, our experienced veterinarians are here to provide comprehensive and personalized care for your pets. We also provide nutritional and behavioral counseling to help your pets thrive.

                    Our clinic is designed to create a comfortable and welcoming environment for both you and your pets. We understand that visiting the vet can be a stressful experience, so we make it a priority to create a calm and friendly atmosphere. Our caring staff is trained in fear-free handling techniques to ensure that your pets feel safe and relaxed during their visit.

                    We believe in the importance of preventive care and educating pet owners on how to best care for their animals. Our team is always available to answer your questions and provide guidance on topics such as nutrition, exercise, and general pet care. We value the trust you place in us to care for your furry family members, and we strive to build lasting relationships with our clients based on trust and open communication.

                    Thank you for choosing D Barking Zoo Animal Clinic for your pet's healthcare needs. We look forward to meeting you and providing exceptional veterinary care for your beloved pets.</p>
            </div>

        </div>
        <div class="col-5 gap-4 p-4 position-relative start-0 justify-content-evenly mainbar">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/vetconsultation.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body bg-info-subtle">
                    <a href="/consultation/" class="btn btn-primary col-12 mb-1 mt-2">CONSULTATION</a>
                    <p class="tabinfo">From emergency care to routine check ups.</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/petgrooming.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body bg-info-subtle">
                    <a href="/grooming_service/" class="btn btn-primary col-12 mb-1 mt-2">GROOMING SERVICE</a>
                    <p class="tabinfo">Pet grooming with love.</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/pethotel.png')}}" class="card-img-top" alt="...">
                <div class="card-body bg-info-subtle">
                    <a href="/pet_boarding/" class="btn btn-primary col-12 mb-1 mt-2">PET BOARDING</a>
                    <p class="tabinfo">Love and care for your pets while you're away.</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/products.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body bg-info-subtle">
                    <a href="/products" class="btn btn-primary col-12 mb-1 mt-2">PET SUPPLIES</a>
                    <p class="tabinfo" d-flex justify-content-center>*Products available in-store only.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="footer">
    <div class="row">
        <div class="footer col-3">
            <div class="d-grid mt-2 justify-content-center">
                <span class="footerhead">Open daily:</span>
                <p class="footer-detail">10AM - 7PM</p>
                <div class="socials">
                    <div class="footer-socials justify-content-center">
                        <span class="footer-detail">Follow us:</span>
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-twitter"></i>
                            <i class="bi bi-tiktok"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer col-3">
            <div class="d-grid mt-2 justify-content-center">
                <span class="footerhead">OTIS BRANCH</span>
                <p class="footer-detail">Otis 888 Paz Mendoza Guazon St., Otis Paco Manila</p>
                <p class="footer-detail">0915-7090-337 / 8354-3958</p>
            </div>
        </div>
        <div class="footer col-3">
            <div class="d-grid mt-2 justify-content-center">
                <span class="footerhead">SAMPALOC BRANCH</span>
                <p class="footer-detail">262 M. Dela Fuente St., Sampaloc Manila</p>
                <p class="footer-detail">09063342135 / 7000-0580</p>
            </div>
        </div>
        <div class="footer col-3">
            <div class="d-grid mt-2 justify-content-center">
                <span class="footerhead">STA. MESA BRANCH</span>
                <p class="footer-detail">3706 Lubiran St., Bacood Sta. Mesa</p>
                <p class="footer-detail">0977-750-8720 / 7092-9288</p>
            </div>
        </div>
    </div>
</div>






