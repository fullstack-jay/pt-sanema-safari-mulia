@extends('layouts.admin')

@section('title', 'Data Akun PT Sanema Safari Mulia')

@section('head-link')
<!-- Custom fonts for this template-->
<link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link
  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
  rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ URL::asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('vendor/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap-editable.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="col-12 mb-2">
    <div class="page-title-box justify-content-between d-flex align-items-center">
      <h4 class="mb-0" style="font-weight: bold;color:black">Kelola Akun</h4>
      <div class="page-title-right">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a href="#" style="text-decoration: none">Akun</a></li>
          <li class="breadcrumb-item active">Kelola Akun</li>
        </ol>
      </div>
    </div>
  </div>

  @if (session()->has('deleted'))
  <div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    {{ session()->get('deleted') }}
  </div>
  @endif
  @if (session()->has('akun_store'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    {{ session()->get('akun_store') }}
  </div>
  @endif

  <h5 class="mt-4 text-center" style="color: #000; font-weight: 300" >Seluruh  <b style="font-weight: bold">akun karyawan</b> yang ada di Database Aplikasi Penggajian PT Sanema Safari Mulia</h5>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Tanggal dibuat</th>
            <th>NIP</th>
            <th>Nama Lengkap</th>
            <th>Status</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <a href="">
            <tr>
              <td>{{ $user->created_at->format('m/d/Y') }}</td>
              <td>{{ $user->nip }}</td>
              <td>{{ $user->employee->full_name }}</td>
              <td><a href="#" class="status" data-type="select" data-pk="{{ $user->id }}" data-value={{ $user->is_active
                  ? 1 : 2 }} data-url="{{ url('api/admin/active') }}"
                  data-title="Select status"></a><span style="display: none">{{ $user->is_active ? 'Active' : 'Blocked'
                  }}</span></td>
              <td class="text-center">
                <a class="btn btn-info btn-sm" style="width: 60px;"
                  href="{{ url('admin/data-karyawan/'.$user->employee->id) }}" role="button">Lihat</a>
                <a class="btn btn-warning btn-sm mx-1" style="width: 60px;"
                  href="{{ url('admin/data-karyawan/'.$user->employee->id.'/edit') }}" role="button">Edit</a>
                <button type="button" class="btn btn-danger btn-sm d-inline" style="width: 60px;" data-toggle="modal"
                  data-target="#exampleModalCenter{{ $user->id }}">Hapus</button>
              </td>
            </tr>
          </a>

          {{-- Delete Modal --}}
          <div class="modal fade" id="exampleModalCenter{{ $user->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Yakin ingin menghapus akun
                    ?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Seluruh data akun akan dihapus secara permanen dan tidak dapat dikembalikan.
                </div>
                <div class="modal-footer p-0 px-3">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <form method="POST" action="{{ url('/admin/akun/'.$user->employee->id) }}" class="m-0 p-0">
                    @csrf
                    @method('delete')
                    <div class="form-group">
                      <input type="submit" class="mt-3 btn btn-danger" value="Hapus">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </tbody>
      </table>
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

<!-- Page level plugins -->
<script src="{{ URL::asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/jszip.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/buttons.colVis.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ URL::asset('js/demo/datatables-demo.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-editable.min.js') }}"></script>

<script>
  $(function(){
            $('.status').editable({
                mode: 'inline',
                showbuttons: false,
                source: [
                    {value: 1, text: 'Active'},
                    {value: 2, text: 'Blocked'},
                ],
                params: function(params) {
                    params.name = $(this).editable().data('name');
                    return params;
                }
            });


            $(".alert").delay(3000).slideUp(300);
        });
</script>
@endsection
