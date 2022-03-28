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

              <a href="{{route ('prodi.restore')}}"><i class="fa fa-trash">Trash</i></a>
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-prodi">
                  <i class="fa fa-user"></i> Add
                </button>
              
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Prodi</th>
                        <th>Nama Prodi</th>
                        <th>Jenjang</th>
                        <th>Akreditasi</th>
                        <th width="100px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php($i = 1)
                    @foreach($prodis as $prodi)
                    @if($prodi->hapus == 1)
                    <tr>
                    <td>{{ $i++ }}</td>
                        <td>{{ $prodi->kode_prodi }}</td>
                        <td>{{ $prodi->nama_prodi }}</td>
                        <td>{{ $prodi->jenjang }}</td>
                        <td>{{ $prodi->akreditasi }}</td>
                        <td>
                          <a title="Lihat Detil" href="{{route('prodi.detil', $prodi->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                          <a title="Hapus" href="{{route('prodi.delete.soft', $prodi->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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

      <div class="modal fade" id="modal-prodi">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Form Tambah Prodi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                  <form action="{{route ('prodi.add')}}" method="POST">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="kode_prodi">Kode Prodi</label>
                        <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" placeholder="Input Kode Prodi">
                      </div>
                      <div class="form-group">
                        <label for="nama_prodi">Nama Prodi</label>
                        <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" placeholder="Input Nama Prodi">
                      </div>
                      <div class="form-group">
                        <label for="jenjang">Jenjang</label>
                        <select class="form-control" id="jenjang" name="jenjang" placeholder="Jenjang">
                        <option value="Null">-- Pilih Jenjang --</option>
                          <option value="S1"> S1 </option>
                          <option value="S2"> S2 </option>
                          </select>
                      </div>
                      <div class="form-group">
                      <label for="akreditasi">Akreditasi</label>
                        <select class="form-control" id="akreditasi" name="akreditasi" placeholder="Akreditasi">
                        <option value="Null">-- Pilih Akreditasi --</option>
                          <option value="A"> A </option>
                          <option value="B"> B </option>
                          <option value="C"> C </option>
                          </select>
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