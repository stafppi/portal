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

              <a href="{{route('pendaftar.restore')}}"><i class="fa fa-trash">Trash</i></a>
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                  <i class="fa fa-user"></i> Add
                </button>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Prodi</th>
                        <th>Nama</th>
                        <th>No Telepon/WA</th>
                        <th>Tgl Daftar</th>
                        <th width="100px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php($i = 1)
                    @foreach($mahasiswas as $mahasiswa)
                    @if($mahasiswa->is_delete == 1 && $mahasiswa->mhs_status == 'Calon')
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $mahasiswa['prodi_model']['nama_prodi'] }}</td>
                      <td>{{ $mahasiswa->nama }}</td>
                      <td>{{ $mahasiswa->no_telepon }}</td>
                      <td>{{ $mahasiswa['ta']['tahun_akademik'] }} || {{ $mahasiswa['ta']['semester_ta'] }} || {{ $mahasiswa->created_at }}</td>
                      <td>
                        <a title="Lihat Detil" href="{{ route('pendaftar.detil', $mahasiswa->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                        <a title="Send" href="{{ route('mahasiswa.migrate', $mahasiswa->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-paper-plane"></i></a>
                        <a title="Hapus" href="{{ route('pendaftar.delete.soft', $mahasiswa->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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
              <h4 class="modal-title">Form Tambah Mahasiswa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <!-- general form elements -->
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{route('pendaftar.add')}}" method="POST">
                    @csrf
                    <div class="card-body">
                      <!-- <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Input NIM">
                      </div> -->
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
                      </div>

                      <div class="form-group">
                        <label for="id_tahun_akademik"></label>
                        <select class="form-control" name="id_tahun_akademik" id="id_tahun_akademik">
                          <option value="Null">-- Pilih Tahun Akademik --</option>
                          @foreach($ta as $row)
                          <option value="{{ $row->id }}"> {{ $row->tahun_akademik }} | {{ $row->semester_ta }} </option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="id_prodi"></label>
                        <select class="form-control" name="id_prodi" id="id_prodi">
                          <option value="Null">-- Pilih Prodi --</option>
                          @foreach($prodis as $prodi)
                          <option value="{{ $prodi->id }}"> {{ $prodi->nama_prodi }} </option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="id_jenjang"></label>
                        <select class="form-control" name="id_jenjang" id="id_jenjang">
                          <option value="Null">-- Pilih Jenjang --</option>
                          @foreach($jenjang as $row)
                          <option value="{{ $row->id }}"> {{ $row->nama_jenjang }} </option>
                          @endforeach
                        </select>
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