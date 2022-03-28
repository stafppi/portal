@extends('templates.app')

@section('content')

<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Jabatan Update</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('jabatan.dosen.update', $jabatan->id) }}">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="{{ $jabatan->jabatan }}" id="jabatan" placeholder="Input Jabatan">
                  </div>

                  <div class="form-group">
                    <label for="tunjangan_jabatan">Tunjangan Jabatan</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp. </span>
                        </div>
                        <input type="text" class="form-control" value="{{ $jabatan->tunjangan_jabatan }}" name="tunjangan_jabatan" id="tunjangan_jabatan" placeholder="Input Tunjangan Jabatan">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="tunjangan_sks">Tunjangan SKS</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp. </span>
                        </div>
                        <input type="text" class="form-control" value="{{ $jabatan->tunjangan_sks }}" name="tunjangan_sks" id="tunjangan_sks" placeholder="Input Tunjangan SKS">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection