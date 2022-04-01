@extends('templates.app')

@section('content')

<div class="content">
    <div class="container-fluid">
    <div class="row">
            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{route('pendaftar.view')}}" class="btn btn-warning"><i class="fa fa-caret-left"> Kembali</i></a>
              
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
                        <th>No Telepon/WA</th>
                        <th>Alamat</th>
                        <th>E-Mail</th>
                        <th width="100px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($mahasiswas as $mahasiswa)
                    @if($mahasiswa->is_delete == 0 && $mahasiswa->mhs_status == 'Calon')
                    <tr>
                    <td>{{ $i++ }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->jenis_kelamin }}</td>
                        <td>{{ $mahasiswa->no_telepon }}</td>
                        <td>{{ $mahasiswa->alamat }}</td>
                        <td>{{ $mahasiswa->email }}</td>
                        <td>
                          <a title="Lihat Detil" href="{{ route('pendaftar.detil', $mahasiswa->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                          <a title="Restore" href="{{ route('pendaftar.back', $mahasiswa->id) }}" class="btn btn-sm btn-primary" id="restore"><i class="fa fa-random"></i></a>
                          <a title="Hapus Permanen" href="{{ route('mahasiswa.delete', $mahasiswa->id) }}" class="btn btn-sm btn-danger" id="deletePermanen"><i class="fa fa-trash"></i></a>
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