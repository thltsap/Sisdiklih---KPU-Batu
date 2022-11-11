@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data User</h1>
          <a href="{{ route('user-data.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
              <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data User
          </a>
      </div>

      <!-- Content Row -->
      <div class="row">
          <div class="card-body">
              <div class="table-responsive">
                <form class="float-right form-inline" id="searchForm" method="get" action="{{ route('user-data.index') }}" role="search">
                    <div class="form-group mb-3 mt-3">
                        <input type="text" name="keyword" class="form-control" id="Keyword" aria-describedby="Keyword" placeholder="Nama/NIK" value="{{request()->query('keyword')}}">
                    </div>
                    <button type="submit" class="btn btn-outline-info mx-2">Cari</button>
                    <a href="{{ route('user-data.index') }}">
                        <button type="button" class="btn btn-outline-danger">Reset</button>
                    </a>
                </form>
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                   
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Tanggal Lahir</th>
                          <th>Umur</th>
                          <th>Nomer HP</th>
                          <th>NIK KTP</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      @forelse($items as $item)
                          <tr>
                              <td>{{ $item->id }}</td>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->address }}</td>
                              <td>{{$item->birthdate}}</td>
                              <td>{{$item->age}}</td>
                              <td>{{ $item->phone }}</td>
                              <td>
                                {{$item->nik}}
                            </td>                              
                              <td>
                                  <a href="{{ route('user-data.edit', $item->id) }}" class="btn btn-info">
                                      <i class="fa fa-pencil-alt"></i>
                                  </a>
                                  <form action="{{route( 'user-data.destroy', $item->id) }}" method="post" class="d-inline">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-danger">
                                          <i class="fa fa-trash"></i>
                                      </button>
                                  </form>

                              </td>
                          </tr>
                      @empty
                          <td colspan="7" class="text-center">
                              Data Kosong
                          </td>
                      @endforelse
                      </tbody>
                  </table>
                  {{ $items->links() }}
              </div>
          </div>
      </div>
    </div>
    <!-- /.container-fluid -->
@endsection
