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

              <a href="{{route('matakuliah.restore')}}"><i class="fa fa-trash">Trash</i></a>
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                  <i class="fa fa-user"></i> Add
                </button>
              
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
                    @if($matakuliah->hapus == 1)
                    <tr>
                    <td>{{ $i++ }}</td>
                        <td>{{ $matakuliah->kode_matakuliah }}</td>
                        <td>{{ $matakuliah->nama_matakuliah }}</td>
                        <td>{{ $matakuliah->sks }}</td>
                       
                        <td>
                          <a title="Lihat Detil" href="{{route ('matakuliah.detil', $matakuliah->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                          <a title="Hapus" href="{{route ('matakuliah.delete.soft', $matakuliah->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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
</div>

      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Form Tambah MataKuliah</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                  <form action="{{route('matakuliah.add')}}" method="POST">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="kode_matakuliah">Kode MataKuliah</label>
                        <input type="text" class="form-control" id="kode_matakuliah" name="kode_matakuliah" placeholder="Input Kode MataKuliah">
                      </div>
                      <div class="form-group">
                        <label for="nama_matakuliah">Nama MataKuliah</label>
                        <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" placeholder="Input Nama MataKuliah">
                      </div>
                      <div class="form-group">
                        <label for="sks">Sks</label>
                        <select class="form-control" id="sks" name="sks" placeholder="sks">
                        <option value="Null">-- Pilih sks --</option>
                          <option value="1"> 1 </option>
                          <option value="2"> 2 </option>
                          <option value="3"> 3 </option>
                          </select>
                     
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