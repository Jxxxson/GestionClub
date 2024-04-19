<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <div class="logo-container"></div>
            <img style="height: 40px; width: 60px;" class="imageVaa" src="{{asset('image/vaa.png')}}" alt="Logo va'a">
            Gestion du club
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="/"><i class="fas fa-home"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="/apropos"><i class="fas fa-info-circle"></i> A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="/contact"><i class="fas fa-envelope"></i> Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-users"></i> Membres
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @auth

                            <li><a class="dropdown-item  bi bi-person-fill"
                                   href="{{ route('users.edit', \Illuminate\Support\Facades\Auth::user()) }}">Profil</a>
                            </li>

                            @if(Auth::user()->admin)
                                {{--                                <form action="{{ route('dashboard') }}" method="post">--}}
                                {{--                                    @csrf--}}
                                {{--                                    <button type="submit" class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</button>--}}
                                {{--                                </form>--}}
                                <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                            @endif
                        @endauth

                        <li><a class="dropdown-item" href="/login"><i class="fas fa-sign-in"></i> Connexion </a></li>
                        <li><a class="dropdown-item" href="#" id="logoutDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-sign-out-alt"></i> Déconnexion
                            </a></li>
                        <li class="dropdown">

                            <ul class="dropdown-menu" aria-labelledby="logoutDropdown">
                                <li><a class="dropdown-item" href="#">Se déconnecter</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
