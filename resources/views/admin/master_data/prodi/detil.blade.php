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
                            <td>Kode Prodi</td>
                            <td align="center"> : </td>
                            <td>{{ $prodi->kode_prodi }}</td>
                        </tr>
                        <tr>
                            <td>Nama Prodi</td>
                            <td align="center"> : </td>
                            <td>{{ $prodi->nama_prodi }}</td>
                        </tr>
                        <tr>
                            <td>Jenjang</td>
                            <td align="center"> : </td>
                            <td>{{ $prodi->jenjang }}</td>
                        </tr>
                        <tr>
                            <td>Akreditasi</td>
                            <td align="center"> : </td>
                            <td>{{ $prodi->akreditasi }}</td>
                        </tr>
                        <tr>
                            <td>Tgl Dibuat</td>
                            <td align="center"> : </td>
                            <td>{{ $prodi->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
                <!-- /.post -->
                <a href="{{route ('prodi.view')}}" class="btn btn-warning">Kembali</a>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                <form class="form-horizontal" method="post" action="{{route ('prodi.edit', $prodi->id)}}">
                    @csrf
                    <div class="form-group row">
                    <label for="kode_prodi" class="col-sm-2 col-form-label">Kode Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" name="kode_prodi" value="{{ $prodi->kode_prodi }}" class="form-control" id="kode_prodi" placeholder="Kode Prodi">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="nama_prodi" class="col-sm-2 col-form-label">Nama Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_prodi" value="{{ $prodi->nama_prodi }}" class="form-control" id="nama_prodi" placeholder="Nama Prodi">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="jenjang" class="col-sm-2 col-form-label">Jenjang</label>
                    <div class="col-sm-10">
                        <select name="jenjang" value="{{ $prodi->jenjang }}" class="form-control" id="Jenjang">
                        <option value="Null">-- Pilih Jenjang --</option>
                          <option value="S1" <?php echo $prodi->jenjang == 'S1' ? 'selected': ''; ?> >S1</option>
                          <option value="S2" <?php echo $prodi->jenjang == 'S2' ? 'selected': ''; ?> >S2</option>
                          </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="akreditasi" class="col-sm-2 col-form-label">Akreditasi</label>
                    <div class="col-sm-10">
                        <select name="akreditasi" value="{{ $prodi->akreditasi }}" class="form-control" id="akreditasi">
                        <option value="Null">-- Pilih Akreditasi --</option>
                          <option value="A" <?php echo $prodi->akreditasi == 'A' ? 'selected': ''; ?> >A</option>
                          <option value="B" <?php echo $prodi->akreditasi == 'B' ? 'selected': ''; ?> >B</option>
                          <option value="C" <?php echo $prodi->akreditasi == 'C' ? 'selected': ''; ?> >C</option>
                    </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                    </div>
                </form>
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