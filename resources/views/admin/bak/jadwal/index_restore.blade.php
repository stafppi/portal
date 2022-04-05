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

              <a href="{{ route('jadwal.kuliah') }}" class="btn btn-warning">Kembali</a>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Tahun Akademik</th>
                        <th>Prodi</th>
                        <th>Semester</th>
                        <th>Matkul</th>
                        <th>Dosen</th>
                        <th>Ruang</th>
                        <th>Hari - Jam</th>
                        <th width="100px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                  @php ($i = 1)
                  @foreach($jadwalKuliah as $jadwal)
                  @if($jadwal->is_delete == 0)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $jadwal['thn_akademik']['tahun_akademik'] }} - {{ $jadwal['thn_akademik']['semester_ta'] }}</td>
                        <td>{{ $jadwal['jadwal_kuliah']['nama_prodi'] }}</td>
                        <td>{{ $jadwal['SemesterModel']['semester'] }}</td>
                        <td>{{ $jadwal['matkulModel']['nama_matakuliah'] }}</td>
                        <td>{{ $jadwal['DosenModel']['nama'] }}</td>
                        <td>{{ $jadwal['RuangModel']['nama_ruang'] }}</td>
                        <td>{{ $jadwal->hari }} - {{ $jadwal->jam_masuk }}</td>
                        <td>
                          <a title="Restore" href="{{ route('jadwal.kuliah.restore', $jadwal->id) }}" class="btn btn-sm btn-primary" id="restore"><i class="fa fa-random"></i></a>
                          <a title="Hapus Permanen" href="{{ route('jadwal.kuliah.delete', $jadwal->id) }}" class="btn btn-sm btn-danger" id="deletePermanen"><i class="fa fa-trash"></i></a>
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