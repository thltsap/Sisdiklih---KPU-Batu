@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Tentang Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Tentang</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="images/hijab.png" alt="" style="object-fit: cover;">
                    {{--  <a href="https://id.pngtree.com/so/hari-kemerdekaan-indonesia">hari kemerdekaan indonesia png dari id.pngtree.com</a>  --}}
                    <img class="position-absolute top-0 start-0 pe-3 pb-3" src="images/kpulogo.png" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="text-primary text-uppercase mb-2">Tentang Kami</h6>
                    <h1 class="display-6 mb-4">Komisi Pemilihan Umum Kota Batu</h1>
                    <p>Komisi Pemilihan Umum (KPU) adalah lembaga Penyelenggara Pemilu yang bersifat nasional, tetap, dan mandiri yang bertugas melaksanakan Pemilu. KPU Provinsi dan KPU Kabupaten/Kota adalah Penyelenggara Pemilu di Provinsi dan Kabupaten/Kota. Wilayah kerja KPU meliputi seluruh wilayah Negara Kesatuan Republik Indonesia. KPU menjalankan tugasnya secara berkesinambungan dan dalam menyelenggarakan Pemilu, KPU bebas dari pengaruh pihak manapun berkaitan dengan pelaksanaan tugas dan wewenangnya. KPU berkedudukan di Ibu Kota Negara Republik Indonesia, KPU Provinsi berkedudukan di ibu kota provinsi, dan KPU Kabupaten/Kota berkedudukan di ibu kota kabupaten/kota.</p>
                    <p>Dalam menjalankan tugasnya, KPU dibantu oleh Sekretariat Jenderal; KPU Provinsi dan KPU Kabupaten/Kota masing-masing dibantu oleh sekretariat. Jumlah anggota KPU sebanyak 7 (tujuh) orang; KPU Provinsi sebanyak 5 (lima) orang; dan KPU Kabupaten/Kota sebanyak 5 (lima) orang. Keanggotaan KPU, KPU Provinsi, dan KPU Kabupaten/Kota terdiri atas seorang ketua merangkap anggota dan anggota. Ketua KPU, KPU Provinsi, dan KPU Kabupaten/Kota dipilih dari dan oleh anggota.</p>
                    <p>Setiap anggota KPU, KPU Provinsi, dan KPU Kabupaten/Kota mempunyai hak suara yang sama. Komposisi keanggotaan KPU, KPU Provinsi, dan KPU Kabupaten/Kota memperhatikan keterwakilan perempuan sekurang-kurangnya 30% (tiga puluh perseratus). Masa keanggotaaan KPU, KPU Provinsi, dan KPU Kabupaten/Kota 5 (lima) tahun terhitung sejak pengucapan sumpah/janji.</p>
                    {{--  <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>  --}}
                    <div class="row g-2 mb-4 pb-2">
                        <h6 class="text-primary text-uppercase mb-2">Tugas dan Wewenang</h6>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Menyelenggarakan Pemilihan
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Mengayomi Pemilih
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Mengoordinasi Pemilihan
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Menyampaikan Daftar Pemilihan
                        </div>
                    </div>
                    <div class="row g-4">
                        {{--  <div class="col-sm-6">
                            <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                        </div>  --}}
                        <div class="col-sm-6">
                            <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+0341511123">
                                <span class="flex-shrink-0 btn-square bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </span>
                                <span class="px-3">(0341)511123</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection