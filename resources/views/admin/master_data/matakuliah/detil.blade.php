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
                            <td>Kode MataKuliah</td>
                            <td align="center"> : </td>
                            <td>{{ $matakuliah->kode_matakuliah }}</td>
                        </tr>
                        <tr>
                            <td>Nama MataKuliah</td>
                            <td align="center"> : </td>
                            <td>{{ $matakuliah->nama_matakuliah }}</td>
                        </tr>
                        <tr>
                            <td>Sks</td>
                            <td align="center"> : </td>
                            <td>{{ $matakuliah->sks}}</td>
                        </tr>
                            <tr>
                                <td>Tgl Dibuat</td>
                                <td align="center"> : </td>
                                <td>{{ $matakuliah->created_at }}</td>
                            </tr>
                    </tbody>
</table>

                <a href="{{route ('matakuliah.view')}}" class="btn btn-warning">Kembali</a>
                </div>

                
                <div class="tab-pane" id="timeline">
                <form class="form-horizontal" method="post" action="{{route ('matakuliah.edit', $matakuliah->id)}}">
                    @csrf
                    <div class="form-group row">
    <label for="kode_matakuliah" class="col-sm-2 col-form-label">Kode MataKuliah</label>
    <div class="col-sm-10">
        <input type="text" name="kode_matakuliah" value="{{ $matakuliah->kode_matakuliah }}" class="form-control" id="kode_matakuliah" placeholder="Kode MataKuliah">
</div>
</div>
<div class="form-group row">
    <label for="nama_matakuliah" class="col-sm-2 col-form-label">Nama MataKuliah</label>
    <div class="col-sm-10">
        <input type="text" name="nama_matakuliah" value="{{ $matakuliah->nama_matakuliah }}" class="form-control" id="nama_matakuliah" placeholder="Nama MataKuliah">
</div>
</div>
<div class="form-group row">
    <label for="sks" class="col-sm-2 col-form-label">Sks</label>
    <div class="col-sm-10">
        <select name="sks" value="{{ $matakuliah->sks }}" class="form-control" id="sks">
            <option value="Null">-- Pilih Sks --</option>
            <option value="1" <?php echo $matakuliah->sks == '1' ? 'selected': ''; ?> > 1</option>
            <option value="2" <?php echo $matakuliah->sks == '2' ? 'selected': ''; ?> > 2</option>
            <option value="3" <?php echo $matakuliah->sks == '3' ? 'selected': ''; ?> > 3</option>
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
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>



@endsection