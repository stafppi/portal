@extends('templates.app')

@section('content')

<div class="content">
    <div class="container-fluid">
    <div class="row">
            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{route('matakuliah.view')}}" class="btn btn-warning"><i class="fa fa-caret-left"> Kembali</i></a>
              
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
                        <th>Kode MataKuliah</th>
                        <th>Nama MataKuliah</th>
                        <th>Sks</th>
                        <th width="100px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($matakuliahs as $matakuliah)
                    @if($matakuliah->hapus == 0)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $matakuliah->kode_matakuliah }}</td>
                        <td>{{ $matakuliah->nama_matakuliah }}</td>
                        <td>{{ $matakuliah->sks }}</td>
                        <td>
                          <a title="Lihat Detil" href="{{route('matakuliah.detil', $matakuliah->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                          <a title="Restore" href="{{route('matakuliah.back', $matakuliah->id) }}" class="btn btn-sm btn-primary" id="restore"><i class="fa fa-random"></i></a>
                          <a title="Hapus Permanen" href="{{route('matakuliah.delete', $matakuliah->id) }}" class="btn btn-sm btn-danger" id="deletePermanen"><i class="fa fa-trash"></i></a>
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