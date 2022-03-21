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

              <a href="{{ route('dosen.restore') }}"><i class="fa fa-trash">Trash</i></a>
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                  <i class="fa fa-user"></i> Add
                </button>
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
                        <th width="100px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($dosens as $dosen)
                    @if($dosen->hapus == 1)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $dosen->nama }}</td>
                        <td>{{ $dosen->jenis_kelamin }}</td>
                        <td>{{ $dosen->no_telepon }}</td>
                        <td>{{ $dosen->alamat }}</td>
                        <td>
                          <a title="Lihat Detil" href="{{ route('dosen.detil', $dosen->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                          <a title="Hapus" href="{{ route('dosen.delete.soft', $dosen->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Data Akan dihapus?')"><i class="fa fa-trash"></i></a>
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

<!-- modal -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Form Tambah Dosen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <!-- general form elements -->
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('dosen.add') }}" method="POST">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
                      </div>
                      <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                      </div>
                      <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                      </div>
                      <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                          <option value="Null">-- Pilih Gander --</option>
                          <option value="Laki-Laki"> Laki-Laki </option>
                          <option value="Perempuan"> Perempuan </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" placeholder="Tempat Lahir">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com">
                      </div>
                      <div class="form-group">
                        <label for="no_telepon">No Telepon/WA</label>
                        <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="ex : 08xxxxxx">
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="20" rows="5"></textarea>
                      </div>

                      <!-- <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div> -->
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