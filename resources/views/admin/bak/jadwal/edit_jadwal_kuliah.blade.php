@extends('templates.app')

@section('content')

<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

        <div class="card card-primary card-outline">

            <div class="text-center">

            </div>

            </div>
        </div>
        </div>
        <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Bio</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Update Data</a></li>
            </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                <!-- Post -->
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Tahun Akademik</td>
                            <td align="center"> : </td>
                            <td>{{ $jadwalKuliah['thn_akademik']['tahun_akademik'] }} - {{ $jadwalKuliah['thn_akademik']['semester_ta'] }}</td>
                        </tr>
                        <tr>
                            <td>Prodi</td>
                            <td align="center"> : </td>
                            <td>{{ $jadwalKuliah['jadwal_kuliah']['nama_prodi'] }}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td align="center"> : </td>
                            <td>{{ $jadwalKuliah['SemesterModel']['semester'] }}</td>
                        </tr>
                        <tr>
                            <td>Matakuliah</td>
                            <td align="center"> : </td>
                            <td>{{ $jadwalKuliah['matkulModel']['nama_matakuliah'] }}</td>
                        </tr>
                        <tr>
                            <td>Dosen</td>
                            <td align="center"> : </td>
                            <td>{{ $jadwalKuliah['DosenModel']['nama'] }}</td>
                        </tr>
                        <tr>
                            <td>Ruang</td>
                            <td align="center"> : </td>
                            <td>{{ $jadwalKuliah['RuangModel']['nama_ruang'] }}</td>
                        </tr>
                        <tr>
                            <td>Hari - Jam</td>
                            <td align="center"> : </td>
                            <td>{{ $jadwalKuliah->hari }} - {{ $jadwalKuliah->jam_masuk }} s/d {{ $jadwalKuliah->jam_keluar }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{route ('jadwal.kuliah')}}" class="btn btn-warning">Kembali</a>
                </div>

                
                <div class="tab-pane" id="timeline">
                <form class="form-horizontal" method="post" action="{{ route('jadwal.kuliah.update',$jadwalKuliah->id) }}">
                    @csrf

                      

                      <div class="form-group">
                        <label for="id_prodi">Program Studi</label>
                        <select class="form-control" name="id_prodi" id="id_prodi">
                          <option value="Null">-- Pilih Prodi --</option>
                          @foreach($prodis as $prodi)
                          <option value="{{ $prodi->id }}" <?php echo ($jadwalKuliah->id_prodi == $prodi->id)? 'selected' : ''; ?> required=""> {{ $prodi->nama_prodi }} </option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="id_semester">Semester</label>
                        <select class="form-control" name="id_semester" id="id_semester">
                          @foreach($semesters as $semester)
                          <option value="{{ $semester->id }}" <?php echo ($jadwalKuliah->id_semester == $semester->id)? 'selected' : ''; ?> > {{ $semester->semester }} </option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="id_matkul">Matakuliah</label>
                        <select class="form-control" name="id_matkul" id="id_matkul">
                          @foreach($matkuls as $matkul)
                          <option value="{{ $matkul->id }}" <?php echo ($jadwalKuliah->id_matkul == $matkul->id)? 'selected' : ''; ?> > {{ $matkul->nama_matakuliah }} </option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="id_dosen">Dosen</label>
                        <select class="form-control" name="id_dosen" id="id_dosen">
                          <option value="Null">-- Pilih Dosen --</option>
                          @foreach($dosens as $dosen)
                          <option value="{{ $dosen->id }}" <?php echo ($jadwalKuliah->id_dosen == $dosen->id)? 'selected' : ''; ?> > {{ $dosen->nama }} </option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="hari">Hari</label>
                        <select class="form-control" name="hari" id="hari">
                          <option value="Null">-- Pilih Hari --</option>
                          <option value="Senin" <?php echo ($jadwalKuliah->hari == 'Senin')? 'selected' : ''; ?> > Senin </option>
                          <option value="Selasa" <?php echo ($jadwalKuliah->hari == 'Selasa')? 'selected' : ''; ?> > Selasa </option>
                          <option value="Rabu" <?php echo ($jadwalKuliah->hari == 'Rabu')? 'selected' : ''; ?> > Rabu </option>
                          <option value="Kamis" <?php echo ($jadwalKuliah->hari == 'Kamis')? 'selected' : ''; ?> > Kamis </option>
                          <option value="Jumat" <?php echo ($jadwalKuliah->hari == 'Jumat')? 'selected' : ''; ?> > Jumat </option>
                          <option value="Sabtu" <?php echo ($jadwalKuliah->hari == 'Sabtu')? 'selected' : ''; ?> > Sabtu </option>
                        </select>
                      </div>

                      <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                                <label for="jam_masuk">Jam Masuk</label>
                                <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" value="{{ $jadwalKuliah->jam_masuk }}">
                            </div>
                          </div>
                          <div class="col-6">
                          <div class="form-group">
                                <label for="jam_keluar">Jam Keluar</label>
                                <input type="time" class="form-control" id="jam_keluar" name="jam_keluar" value="{{ $jadwalKuliah->jam_keluar }}">
                            </div>
                          </div>
                      </div>
                      

                      <div class="form-group">
                        <label for="id_ruang">Ruangan</label>
                        <select class="form-control" name="id_ruang" id="id_ruang">
                          <option value="Null">-- Pilih Ruangan --</option>
                          @foreach($ruangs as $ruang)
                          <option value="{{ $ruang->id }}" <?php echo ($jadwalKuliah->id_ruang == $ruang->id)? 'selected' : ''; ?>> {{ $ruang->nama_ruang }} </option>
                          @endforeach
                        </select>
                      </div>
                    <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Update</button>
                    </div>
                    </div>
                </form>
                </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>



@endsection