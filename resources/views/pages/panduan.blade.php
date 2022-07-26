@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Panduan Pemilihan</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Panduan</li>
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
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100">
                    <img class="position-absolute w-100 h-100" src="images/tahapan.jpg">
                    {{--  <a href="https://id.pngtree.com/so/hari-kemerdekaan-indonesia">hari kemerdekaan indonesia png dari id.pngtree.com</a>  --}}
                    {{--  <img class="position-absolute top-0 start-0 pe-3 pb-3" src="images/kpulogo.png" alt="" style="width: 200px; height: 200px;">  --}}
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="text-primary text-uppercase mb-2">Panduan </h6>
                    <h1 class="display-6 mb-4">Tahapan Untuk Menjadi Pemilih</h1>
       
                    <div class="row g-2 mb-4 pb-2">
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Mengisi form yang sudah disediakan
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