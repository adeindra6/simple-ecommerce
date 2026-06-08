<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Simple Ecommerce</a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarNav">
            <ul class="navbar-nav ms-4">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('product') }}">
                        Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('about') }}">
                        Tentang
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('contact') }}">
                        Kontak
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>