@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container mt-4">

    <!-- Content Row -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card shadow">
        <div class="card-body">
            <center>
                <h3>Data Diri</h3>
            </center>
            <form action="{{ route('formUser.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama">
                </div>
                <div class="form-group py-2">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control" name="address" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label for="birthdate">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="birthdate">
                </div>
                <div class="form-group py-2">
                    <label for="phone">No. Handphone atau Whatsapp</label>
                    <input type="text" class="form-control" name="phone" placeholder="No. Handphone">
                </div>
                <div class="form-group py-2">
                    <label for="nik">NIK KTP (Jika Punya)</label>
                    <input type="text" class="form-control" name="nik" placeholder="NIK KTP">
                </div>
                
                <button type="submit" class="btn btn-primary btn-block mt-4">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection