@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <section
        style="background-image: url('{{ asset('images/homepage-background.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 600px;">
        <div class="container py-5">
            <div class="row align-items-center" style="min-height: 300px;">
                <div class="col-lg-8">

                    <h1 class="display-4 fw-bold text-white">
                        Hubungi Kami
                    </h1>

                    <p class="lead text-white">
                        Kami siap membantu Anda dengan pertanyaan, saran,
                        maupun informasi mengenai produk kami.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-5">

                <!-- Contact Info -->
                <div class="col-lg-5">

                    <h2 class="fw-bold mb-4">
                        Informasi Kontak
                    </h2>

                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <h5>📧 Email</h5>
                            <p class="mb-0">
                                support@simpleecommerce.com
                            </p>
                        </div>
                    </div>

                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <h5>📞 Telepon</h5>
                            <p class="mb-0">
                                +62 812-3456-7890
                            </p>
                        </div>
                    </div>

                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <h5>📍 Alamat</h5>
                            <p class="mb-0">
                                Jl. Malioboro No. 123,
                                Yogyakarta, Indonesia
                            </p>
                        </div>
                    </div>

                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5>🕒 Jam Operasional</h5>
                            <p class="mb-1">
                                Senin - Jumat: 08:00 - 17:00
                            </p>
                            <p class="mb-0">
                                Sabtu: 08:00 - 12:00
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Contact Form -->
                <div class="col-lg-7">

                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">

                            <h2 class="fw-bold mb-4">
                                Kirim Pesan
                            </h2>

                            <form>

                                <div class="mb-3">
                                    <label class="form-label">
                                        Nama Lengkap
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Masukkan nama Anda"
                                    >
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        Email
                                    </label>

                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Masukkan email Anda"
                                    >
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        Subjek
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Masukkan subjek"
                                    >
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        Pesan
                                    </label>

                                    <textarea
                                        class="form-control"
                                        rows="5"
                                        placeholder="Tulis pesan Anda"
                                    ></textarea>
                                </div>

                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                >
                                    Kirim Pesan
                                </button>

                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection