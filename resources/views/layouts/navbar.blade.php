<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand me-4" href="/">
            <img src="{{ asset('images/logo.jpeg') }}" alt="logo" width="100" height="100"/>
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarNav">
            <ul class="navbar-nav flex-row">
                <li class="nav-item ms-3">
                    <a class="nav-link text-black" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link text-black" href="{{ route('product') }}">
                        Produk
                    </a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link text-black" href="{{ route('about') }}">
                        Tentang
                    </a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link text-black" href="{{ route('contact') }}">
                        Kontak
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>