@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h2 class="fw-bold text-success">Tentang Desa Banyuwangi</h2>
                <p class="lead">
                    Desa Banyuwangi adalah salah satu desa yang kaya akan budaya, tradisi, dan keindahan alamnya.
                    Dikelilingi oleh pegunungan, sawah yang hijau, serta pantai yang menawan, desa ini menjadi
                    pusat kegiatan masyarakat yang menjunjung tinggi nilai gotong royong.
                </p>
                <p>
                    Selain potensi wisata, Desa Banyuwangi juga dikenal dengan hasil pertaniannya,
                    kerajinan lokal, dan berbagai acara adat yang masih dijaga dengan baik hingga saat ini.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/village.png') }}" class="img-fluid rounded shadow-sm" alt="Desa Banyuwangi">
            </div>
        </div>

        <!-- Visi Misi -->
        <div class="row mt-5">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4 class="fw-bold text-success">Visi</h4>
                        <p>Mewujudkan Desa Banyuwangi yang maju, mandiri, dan berdaya saing dengan tetap menjaga kelestarian
                            budaya dan lingkungan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4 class="fw-bold text-success">Misi</h4>
                        <ul>
                            <li>Meningkatkan kualitas pendidikan dan kesehatan masyarakat.</li>
                            <li>Mengembangkan potensi wisata alam dan budaya desa.</li>
                            <li>Mendorong pertumbuhan ekonomi berbasis pertanian dan UMKM.</li>
                            <li>Menjaga kelestarian lingkungan hidup dan kearifan lokal.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Kontak -->
        <div class="text-center mt-5">
            <h5 class="fw-bold">Hubungi Kami</h5>
            <p>
                Kantor Desa Banyuwangi, Jl. Raya Desa Banyuwangi No. 123 <br>
                Email: <a href="mailto:desa@banyuwangi.go.id">desa@banyuwangi.go.id</a> |
                Telp: (0333) 123456
            </p>
        </div>
    </div>
@endsection
