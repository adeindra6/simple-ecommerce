<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand me-4" href="/">Simple Ecommerce</a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarNav">
            <ul class="navbar-nav flex-row">
                <li class="nav-item ms-3">
                    <a class="nav-link text-white" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link text-white" href="{{ route('product') }}">
                        Produk
                    </a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link text-white" href="{{ route('about') }}">
                        Tentang
                    </a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link text-white" href="{{ route('contact') }}">
                        Kontak
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>