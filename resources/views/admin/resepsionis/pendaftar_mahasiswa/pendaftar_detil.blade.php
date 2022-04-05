@extends('templates.app')

@section('content')

<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
            <div class="text-center">
                <img style="width: 200px;" class="profile-user-img img-fluid img-circle"
                    src="{{ asset('dist/img/user4-128x128.jpg') }}"
                    alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{ $mahasiswa->nama }}</h3>

            <p class="text-muted text-center">[ {{ $mahasiswa['prodi_model']['nama_prodi'] }} ]</p>

            <a href="#" class="btn btn-primary btn-block"><b>Update Photo</b></a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-8">
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
                            <td>Nama</td>
                            <td align="center"> : </td>
                            <td>{{ $mahasiswa->nama }}</td>
                        </tr>
                        <tr>
                            <td>Prodi</td>
                            <td align="center"> : </td>
                            <td>{{ $mahasiswa['prodi_model']['nama_prodi'] }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td align="center"> : </td>
                            <td>{{ $mahasiswa->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td align="center"> : </td>
                            <td>{{ $mahasiswa->tempat_lahir }}, {{ $mahasiswa->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td align="center"> : </td>
                            <td>{{ $mahasiswa->agama }}</td>
                        </tr>
                        <tr>
                            <td>No Telp/WhatsApp</td>
                            <td align="center"> : </td>
                            <td>{{ $mahasiswa->no_telepon }}</td>
                        </tr>
                        <tr>
                            <td>E-Mail</td>
                            <td align="center"> : </td>
                            <td>{{ $mahasiswa->email }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td align="center"> : </td>
                            <td>{{ $mahasiswa->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Tgl Daftar</td>
                            <td align="center"> : </td>
                            <td>{{ $mahasiswa['ta']['tahun_akademik'] }} || {{ $mahasiswa['ta']['semester_ta'] }} || {{ $mahasiswa->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
                <!-- /.post -->
                <a href="{{route('pendaftar.view') }}" class="btn btn-warning">Kembali</a>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                <form class="form-horizontal" method="post" action="{{ route('pendaftar.edit', $mahasiswa->id)}}">
                    @csrf
                    
                    <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" id="inputName" placeholder="Name">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="inputEmail" class="col-sm-3 col-form-label">Jenis Kalamin</label>
                    <div class="col-sm-9">
                        <select name="jenis_kelamin" id="" class="form-control">
                            <option value="Null">-- Pilih Gander --</option>
                            <option value="Laki-Laki" <?php echo $mahasiswa->jenis_kelamin == 'Laki-Laki' ? 'selected': ''; ?> >Laki-Laki</option>
                            <option value="Perempuan" <?php echo $mahasiswa->jenis_kelamin == 'Perempuan' ? 'selected': ''; ?> >Perempuan</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" name="tempat_lahir" value="{{ $mahasiswa->tempat_lahir }}" class="form-control" id="tempat_lahir" placeholder="ex : Bandung">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="date" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}" class="form-control" id="tanggal_lahir">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
                        <input type="text" name="agama" value="{{ $mahasiswa->agama }}" class="form-control" id="agama">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="no_telepon" class="col-sm-3 col-form-label">Telp/WhatsApp</label>
                    <div class="col-sm-9">
                        <input type="text" name="no_telepon" value="{{ $mahasiswa->no_telepon }}" class="form-control" id="no_telepon">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" value="{{ $mahasiswa->email }}" class="form-control" id="email">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="alamat" id="alamat" >{{ $mahasiswa->alamat }}</textarea>
                    </div>
                    </div>
                    <!-- <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <div class="checkbox">
                        <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                        </div>
                    </div>
                    </div> -->
                    <div class="form-group row">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                    </div>
                </form>
                </div>
                <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection