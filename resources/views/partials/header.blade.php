<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <a class="boolean_navbar_logo navbar-brand" href="{{ route('homepage')}}">
              <img src="https://www.boolean.careers/images/common/logo.png" alt="logo-boolean">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::route()->getName() == 'homepage' ? 'active' : '' }}">
                        <a class="nav-link text-uppercase" href="{{ route('homepage')}} ">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">
                        Corso
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">
                            Dopo il corso
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">
                            Lezione gratuita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">
                            Assumi i nostri studenti
                        </a>
                    </li>
                    <li class="nav-item cta-boolean">
                        <a class="nav-link text-uppercase white" href="#">
                            Candidati ora
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
