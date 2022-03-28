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
            </div>
            <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Kode Ruang</td>
                            <td align="center"> : </td>
                            <td>{{ $ruang->kode_ruang }}</td>
                        </tr>
                        <tr>
                            <td>Nama Ruang</td>
                            <td align="center"> : </td>
                            <td>{{ $ruang->nama_ruang }}</td>
                        </tr>
                        <tr>
                                <td>Tgl Dibuat</td>
                                <td align="center"> : </td>
                                <td>{{ $ruang->created_at }}</td>
                            </tr>
                    </tbody>
</table>

                <a href="{{route ('ruang.view')}}" class="btn btn-warning">Kembali</a>
                </div>

                
                <div class="tab-pane" id="timeline">
                <form class="form-horizontal" method="post" action="{{route ('ruang.edit', $ruang->id)}}">
                    @csrf
                    <div class="form-group row">
    <label for="kode_ruang" class="col-sm-2 col-form-label">Kode Ruang</label>
    <div class="col-sm-10">
        <input type="text" name="kode_ruang" value="{{ $ruang->kode_ruang }}" class="form-control" id="kode_ruang" placeholder="Kode Ruang">
</div>
</div>
<div class="form-group row">
    <label for="nama_ruang" class="col-sm-2 col-form-label">Nama Ruang</label>
    <div class="col-sm-10">
        <input type="text" name="nama_ruang" value="{{ $ruang->nama_ruang }}" class="form-control" id="nama_ruang" placeholder="Nama Ruang">
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