@extends('templates.app')

@section('content')

<div class="content">
    <div class="container-fluid">
    <div class="row">
            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('dosen.view') }}" class="btn btn-warning"><i class="fa fa-caret-left"> Kembali</i></a>
              
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
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th width="100px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($dosens as $dosen)
                    @if($dosen->hapus == 0)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $dosen->nama }}</td>
                        <td>{{ $dosen->jenis_kelamin }}</td>
                        <td>{{ $dosen->no_telepon }}</td>
                        <td>{{ $dosen->alamat }}</td>
                        <td>
                          <a title="Lihat Detil" href="{{ route('dosen.detil', $dosen->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                          <a title="Restore" href="{{ route('dosen.back', $dosen->id) }}" class="btn btn-sm btn-primary" onclick="return confirm('Data Akan Dikembalikan?')"><i class="fa fa-random"></i></a>
                          <a title="Hapus Permanen" href="{{ route('dosen.delete', $dosen->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Data Akan Dihapus Secara Permanen?')"><i class="fa fa-trash"></i></a>
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



@endsection