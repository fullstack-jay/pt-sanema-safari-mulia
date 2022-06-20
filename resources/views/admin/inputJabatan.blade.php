@extends('layouts.admin')

@section('title', 'Input Jabatan Baru')

@section('head-link')
<!-- Custom fonts for this template-->
<link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link
  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
  rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ URL::asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="col-12 mb-2">
    <!-- Page Heading -->
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0" style="font-weight: bold;color:black">Input Jabatan Baru</h4>
      <div class="page-title-right">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a href="#" style="text-decoration: none">Jabatan</a></li>
          <li class="breadcrumb-item active">Input Jabatan Baru</li>
        </ol>
      </div>
    </div>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-xl-6 col-md-6 mb-6">
      <div class="card shadow h-100 py-2">
        <div class="card-body">
          <form action="{{ url('admin/jabatan/input-jabatan') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="jabatan">Nama Jabatan</label>
              <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan"
                value="{{ old('jabatan') }}">
              @error('jabatan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <label for="gaji">Gaji Pokok</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Rp.</span>
              </div>
              <input type="text" aria-describedby="basic-addon1"
                class="form-control uang @error('gaji') is-invalid @enderror" id="gaji" name="gaji"
                value="{{ old('gaji') }}">
              @error('gaji')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <label for="tunjangan">Tunjangan Jabatan</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon2">Rp.</span>
              </div>
              <input type="text" aria-describedby="basic-addon2"
                class="form-control uang @error('tunjangan') is-invalid @enderror" id="tunjangan" name="tunjangan"
                value="{{ old('tunjangan') }}">
              @error('tunjangan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <button class="btn btn-primary float-right mt-3" type="submit">Buat!</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- /.container-fluid -->
@endsection

@section('foot-link')
<!-- Bootstrap core JavaScript-->
<script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ URL::asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ URL::asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.mask.js') }}"></script>

<script>
  $(document).ready(function(){

                // Format mata uang.
                $( '.uang' ).mask('000.000.000', {reverse: true});

                })
</script>
@endsection
