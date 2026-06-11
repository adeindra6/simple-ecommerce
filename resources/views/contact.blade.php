@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <section
        style="background-image: url('{{ asset('images/homepage-background.jpeg') }}');
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
                        maupun informasi mengenai menu kami.
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
                                pawonparamartacatering@gmail.com
                            </p>
                        </div>
                    </div>

                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <h5>📞 Telepon</h5>
                            <p class="mb-0">
                                +62 821-1642-132
                            </p>
                        </div>
                    </div>

                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <h5>📍 Alamat</h5>
                            <p class="mb-0">
                                Jalan Ring Road Barat No.63, Mlangi, Nogotirto, Kapanewon Gamping, Kabupaten
                                Sleman, Daerah Istimewa Yogyakarta.
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
                                Sabtu: 08:00 - 15:00
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
                                        No. WhatsApp
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Masukkan No. WhatsApp Anda"
                                    >
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        Pilihan Paket
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Masukkan paket yang ingin dipesan"
                                    >
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        Jumlah Pesanan
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Tulis jumlah pesanan anda"
                                    >
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        Tanggal Acara
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Tulis tanggal acara anda"
                                    >
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        Alamat Pengiriman
                                    </label>

                                    <textarea
                                        class="form-control"
                                        rows="5"
                                        placeholder="Tulis jumlah pesanan anda"
                                    >
                                    </textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        Catatan Tambahan
                                    </label>

                                    <textarea
                                        class="form-control"
                                        rows="5"
                                        placeholder="Tulis catatan tambahan"
                                    >
                                    </textarea>
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