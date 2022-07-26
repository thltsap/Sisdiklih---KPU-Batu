@extends('layouts.app')

@section('title')
KPU Batu
@endsection

@section('content')
<!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="images/depan.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Jadilah Generasi Anti Golput</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="images/depan2.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Pilihlah Pemimpin Negeri Ini</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    
    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <div class="media">
                            <div class="media-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/BYC-kZcTkFI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <img class="position-absolute top-0 start-0 pe-3 pb-3" src="images/kpulogo.png" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-50">
                        <h6 class="text-primary text-uppercase mb-2">Tentang Panduan</h6>
                        <h1 class="display-6 mb-4">Panduan Pemilihan</h1>
                        <p>Mengisi data diri pada form yang telah disediakan agar data kalian tercatat dalam daftar pemilih. Selengkapnya dapat melihat halaman panduan untuk lebih lanjut. </p>
                        {{--  <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>  --}}
                        {{--  <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Fully Licensed
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Online Tracking
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Afordable Fee 
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Best Trainers
                            </div>  --}}
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-3" href="{{ route('formUser.index') }}">Form</a>
                            </div>
                            {{--  <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+0123456789">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3">+012 345 6789</span>
                                </a>
                            </div>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Halaman Lainnya</h6>
                <h1 class="display-6 mb-4">Pelajari Lebih Lanjut</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">KPU</h5>
                            <p>#TemanPemilih, yuk kenal sejarah KPU Kota Batu!</p>
                            {{--  <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>  --}}
                        </div>
                        <div class="position-relative mt-3">
                            <center>
                            <img class="img-fluid" src="images/kpumelayani.png" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="{{ route('kpu') }}">Read More</a>
                            </div>
                        </center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">Panduan</h5>
                            <p>Panduan untuk menjadi #TemanPemilih yang baik dan benar</p>
                            {{--  <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>  --}}
                        </div>
                        <div class="position-relative mt-2">
                            <img class="img-fluid" src="images/kotak2.png" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="{{ route('panduan') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">Form</h5>
                            <p>Isi form data diri untuk menjadi #TemanPemilih</p>
                            {{--  <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>  --}}
                        </div>
                        <div class="position-relative mt-2">
                            <center>
                            <img class="img-fluid" src="images/kotak.png" alt="" width="300" height="300" </>
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="{{ route('formUser.index') }}">Read More</a>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
    <!-- Courses End -->
@endsection