@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data User {{ $item->name}}</h1>
      </div>

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
                <form action="{{ route('user-data.update', $item->id) }}" method="post"  enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="name" value="{{ $item->name }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" class="form-control" name="address" placeholder="address" value="{{ $item->address }}">
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="birthdate" placeholder="date" value="{{ $item->birthdate }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomer HP</label>
                        <input type="text" class="form-control" name="phone" placeholder="phone" value="{{ $item->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK KTP</label>
                        <input type="text" class="form-control" name="nik" placeholder="NIK KTP" value="{{ $item->nik }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
