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
                        <th>Tahun Akademik</th>
                        <th>Prodi</th>
                        <th>Semester</th>
                        <th>Dosen</th>
                        <th>Ruang</th>
                        <th>Hari - Jam</th>
                        <th width="100px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                  @php ($i = 1)
                  @foreach($jadwalKuliah as $jadwal)
                  @if($jadwal->is_delete == 1)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td></td>
                        <td>{{ $jadwal['jadwal_kuliah']['nama_prodi'] }}</td>
                        <td>{{ $jadwal['SemesterModel']['semester'] }}</td>
                        <td>{{ $jadwal['DosenModel']['nama'] }}</td>
                        <td>{{ $jadwal['RuangModel']['nama_ruang'] }}</td>
                        <td>{{ $jadwal->hari }} - {{ $jadwal->jam_masuk }}</td>
                        <td>
                          <a title="Lihat Detil" href="{{ route('jadwal.kuliah.edit', $jadwal->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                          <a title="Hapus" href="" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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
              <h4 class="modal-title">Form Tambah Jadwal Kuliah</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <!-- general form elements -->
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('jadwal.kuliah.add') }}" method="POST">
                    @csrf
                    <div class="card-body">

                      <div class="form-group">
                        <label for="id_prodi">Program Studi</label>
                        <select class="form-control" name="id_prodi" id="id_prodi">
                          <option value="Null">-- Pilih Prodi --</option>
                          @foreach($prodis as $prodi)
                          <option value="{{ $prodi->id }}"> {{ $prodi->nama_prodi }} </option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="id_semester">Semester</label>
                        <select class="form-control" name="id_semester" id="id_semester">
                          <option value="Null">-- Pilih Semester --</option>
                          @foreach($semesters as $semester)
                          <option value="{{ $semester->id }}"> {{ $semester->semester }} </option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="id_dosen">Dosen</label>
                        <select class="form-control" name="id_dosen" id="id_dosen">
                          <option value="Null">-- Pilih Dosen --</option>
                          @foreach($dosens as $dosen)
                          <option value="{{ $dosen->id }}"> {{ $dosen->nama }} </option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="hari">Hari</label>
                        <select class="form-control" name="hari" id="hari">
                          <option value="Null">-- Pilih Hari --</option>
                          <option value="Senin"> Senin </option>
                          <option value="Selasa"> Selasa </option>
                          <option value="Rabu"> Rabu </option>
                          <option value="Kamis"> Kamis </option>
                          <option value="Jumat"> Jumat </option>
                          <option value="Sabtu"> Sabtu </option>
                        </select>
                      </div>

                      <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                                <label for="jam_masuk">Jam Masuk</label>
                                <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" placeholder="Input Jam Masuk">
                            </div>
                          </div>
                          <div class="col-6">
                          <div class="form-group">
                                <label for="jam_keluar">Jam Keluar</label>
                                <input type="time" class="form-control" id="jam_keluar" name="jam_keluar" placeholder="Input Jam Keluar">
                            </div>
                          </div>
                      </div>
                      

                      <div class="form-group">
                        <label for="id_ruang">Ruangan</label>
                        <select class="form-control" name="id_ruang" id="id_ruang">
                          <option value="Null">-- Pilih Ruangan --</option>
                          @foreach($ruangs as $ruang)
                          <option value="{{ $ruang->id }}"> {{ $ruang->nama_ruang }} </option>
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