<footer class="bg-dark text-white py-4 mt-5">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <h5>Simple Ecommerce</h5>
                <p>
                    Platform belanja online terpercaya dengan berbagai
                    produk berkualitas.
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
                <p>Email: info@simpleecommerce.com</p>
                <p>Phone: +62 812-3456-7890</p>
            </div>

        </div>

        <hr>

        <div class="text-center">
            © {{ date('Y') }} Simple Ecommerce. All Rights Reserved.
        </div>
    </div>
</footer>