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

              <a href="{{route('tahun.akademik.view')}}"><i class="fa fa-back">Kembali</i></a>
              
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
                    @if($ta->is_delete == 0)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $ta->tahun_akademik }}</td>
                      <td>{{ $ta->semester_ta }}</td>
                      <td>{{ $ta->keterangan }}</td>
                      <td>
                        <?php 
                          if($ta->status == 1){
                            echo "Aktif";
                          }else{
                            echo "Tidak-Aktif";
                          }
                        ?>
                      </td>
                      <td>
                        <a title="Restore" href="{{route('tahun.akademik.restore', $ta->id) }}" class="btn btn-sm btn-primary" id="restore"><i class="fa fa-random"></i></a>
                        <a title="Hapus Permanen" href="{{route('ta.delete', $ta->id) }}" class="btn btn-sm btn-danger" id="deletePermanen"><i class="fa fa-trash"></i></a>
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

@endsection