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
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th width="100px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php($i = 1)
                    @foreach($tahun_akademiks as $ta)
                    @if($ta->is_delete == 1)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $ta->tahun_akademik }}</td>
                      <td>{{ $ta->semester }}</td>
                      <td>{{ $ta->status }}</td>
                      <td></td>
                      <td>
                        <a title="Edit" href="{{ route('mahasiswa.migrate', $ta->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                        <a title="Hapus" href="{{ route('pendaftar.delete.soft', $ta->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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
                  <form action="{{route('tahun.akademik.add')}}" method="POST">
                    @csrf
                    <div class="card-body">
                      <!-- <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Input NIM">
                      </div> -->

                      <div class="form-group">
                        <label for="tahun_akademik">Tahun Akademik</label>
                        <select class="form-control" name="tahun_akademik" id="tahun_akademik">
                          <option value="Null">-- Pilih Tahun Akademik --</option>
                          <option value="2021/2022"> 2021/2022 </option>
                          <option value="2022/2023"> 2022/2023 </option>
                          <option value="2023/2024"> 2023/2024 </option>
                          <option value="2024/2025"> 2024/2025 </option>
                          <option value="2025/2026"> 2025/2026 </option>
                          <option value="2026/2027"> 2026/2027 </option>
                          <option value="2027/2028"> 2027/2028 </option>
                          <option value="2028/2029"> 2028/2029 </option>
                          <option value="2029/2030"> 2029/2030 </option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="semester_ta">Semester</label>
                        <select class="form-control" name="semester_ta" id="semester_ta">
                          <option value="Null">-- Pilih Semester --</option>
                          <option value="Ganjil"> Ganjil </option>
                          <option value="Genap"> Genap </option>
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