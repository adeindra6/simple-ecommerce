<footer class="bg-dark text-white py-4 mt-5">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <h5>Pawon Paramarta Catering</h5>
                <p>
                    Catering enak dengan harga terbaik.
                </p>
            </div>

            <div class="col-md-4">
                <h5>Menu</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="{{ route('product') }}" class="text-white text-decoration-none">Produk</a></li>
                    <li><a href="{{ route('about') }}" class="text-white text-decoration-none">Tentang</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white text-decoration-none">Kontak</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h5>Kontak</h5>
                <p>Email: pawonparamartacatering@gmail.com</p>
                <p>Phone: +62 821-1642-132</p>
                <div class="d-flex gap-3">
                    <a
                        href="https://www.instagram.com/pawonparamarta.catering?igsh=MWc1c3ZwZDBjajV6NQ%3D%3D&utm_source=qr"
                        target="_blank"
                        class="text-danger fs-3"
                    >
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a
                        href="https://www.tiktok.com/@pawonparamarta.c?_r=1&_t=ZS-973iwUBvYer"
                        target="_blank"
                        class="text-white fs-3"
                    >
                        <i class="bi bi-tiktok"></i>
                    </a>
                </div>
            </div>

        </div>

        <hr>

        <div class="text-center">
            © {{ date('Y') }} Pawon Paramarta Catering. All Rights Reserved.
        </div>
    </div>
</footer>