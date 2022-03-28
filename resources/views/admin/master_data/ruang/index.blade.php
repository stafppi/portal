@extends('templates.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
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

              <a href="{{route ('ruang.restore')}}"><i class="fa fa-trash">Trash</i></a>
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ruang">
                  <i class="fa fa-user"></i> Add
                </button>
              
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
                    @if($ruang->hapus == 1)
                    <tr>
                    <td>{{ $i++ }}</td>
                        <td>{{ $ruang->kode_ruang }}</td>
                        <td>{{ $ruang->nama_ruang }}</td>
                        <td>
                          <a title="Lihat Detil" href="{{route('ruang.detil', $ruang->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                          <a title="Hapus" href="{{route('ruang.delete.soft', $ruang->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>

      <div class="modal fade" id="ruang">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Form Tambah Ruang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                  <form action="{{ route('ruang.add') }}" method="POST">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="kode_ruang">Kode ruang</label>
                        <input type="text" class="form-control" id="kode_ruang" name="kd_ruang" placeholder="Input Kode Ruang">
                      </div>
                      <div class="form-group">
                        <label for="nama_ruang">Nama ruang</label>
                        <input type="text" class="form-control" id="nama_ruang" name="nama_ruang" placeholder="Input Nama Ruang">
                      </div>
                      </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          </form>
        </div>
      </div>

@endsection()