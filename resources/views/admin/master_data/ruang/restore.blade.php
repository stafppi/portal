@extends('templates.app')

@section('content')

<div class="content">
    <div class="container-fluid">
    <div class="row">
            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{route('ruang.view')}}" class="btn btn-warning"><i class="fa fa-caret-left"> Kembali</i></a>
              
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
                        <th>Kode Ruang</th>
                        <th>Nama Ruang</th>
                        <th width="100px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($ruangs as $ruang)
                    @if($ruang->hapus == 0)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $ruang->kode_ruang }}</td>
                        <td>{{ $ruang->nama_ruang }}</td>
                        <td>
                          <a title="Lihat Detil" href="{{route('ruang.detil', $ruang->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                          <a title="Restore" href="{{route('ruang.back', $ruang->id) }}" class="btn btn-sm btn-primary" id="restore"><i class="fa fa-random"></i></a>
                          <a title="Hapus Permanen" href="{{route('ruang.delete', $ruang->id) }}" class="btn btn-sm btn-danger" id="deletePermanen"><i class="fa fa-trash"></i></a>
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