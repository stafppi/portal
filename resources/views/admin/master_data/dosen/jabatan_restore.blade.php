@extends('templates.app')

@section('content')

<div class="content">
    <div class="container-fluid">
    <div class="row">
            <div class="col-12">
            <div class="card">
              <div class="card-header">
              <a href="{{ route('jabatan.dosen.view') }}" class="btn btn-warning"><i class="fa fa-caret-left"> Kembali</i></a>

              @if(Session::has('message'))
                  <div class="alert alert-success">
                      {{ Session::get('message') }}
                  </div>
              @endif

              @if(Session::has('delete'))
                  <div class="alert alert-danger">
                      {{ Session::get('delete') }}
                  </div>
              @endif

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Jabatan</th>
                        <th>Tunjangan Jabatan</th>
                        <th>Tunjangan SKS</th>
                        <th>Jumlah Komulatif</th>
                        <th width="100px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($jabatans as $jabatan)
                    @if($jabatan->is_delete == 0)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $jabatan->jabatan }}</td>
                        <td>{{ $jabatan->tunjangan_jabatan }}</td>
                        <td>{{ $jabatan->tunjangan_sks }}</td>
                        <td>{{ $jabatan->jumlah_komulatif_maksimal }}</td>
                        <td>
                          <a title="Hapus" href="{{ route('jabatan.delete', $jabatan->id) }}" class="btn btn-sm btn-danger" id="deletePermanen"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
        </div>
    </div>
    </div>
</div>



@endsection