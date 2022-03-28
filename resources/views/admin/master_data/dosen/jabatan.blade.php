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

              <a href="{{ route('jabatan.restore.view') }}"><i class="fa fa-trash">Trash</i></a>
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                  <i class="fa fa-user"></i> Add
                </button>
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
                    @if($jabatan->is_delete == 1)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $jabatan->jabatan }}</td>
                        <td>{{ $jabatan->tunjangan_jabatan }}</td>
                        <td>{{ $jabatan->tunjangan_sks }}</td>
                        <td>{{ $jabatan->jumlah_komulatif_maksimal }}</td>
                        <td>
                          <a title="Edit" href="{{ route('jabatan.dosen.edit', $jabatan->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a title="Hapus" href="{{ route('jabatan.delete.soft', $jabatan->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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

<!-- modal -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Form Tambah Jabatan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <!-- general form elements -->
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('jabatan.dosen.add') }}" method="POST">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Input Jabatan">
                      </div>
                      <div class="form-group">
                        <label for="tunjangan_jabatan">Tunjangan Jabatan</label>
                        <input type="text" class="form-control" id="tunjangan_jabatan" name="tunjangan_jabatan" placeholder="Input tungangan">
                      </div>
                      <div class="form-group">
                        <label for="tunjangan_sks">Tunjangan SKS</label>
                        <input type="text" class="form-control" id="tunjangan_sks" name="tunjangan_sks" placeholder="Input tunjangan">
                      </div>
                    </div>
                    <!-- /.card-body -->

 
                  
                <!-- /.card -->

 
            <!-- /.card -->

          </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          </form>
          
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

@endsection