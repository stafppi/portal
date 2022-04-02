@extends('templates.app')

@section('content')

<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit Tahun Akademik</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('tahun.akademik.update', $tahun_akademik->id) }}">
                  @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="tahun_akademik">Tahun Akademik</label>
                        <select class="form-control" name="tahun_akademik" id="tahun_akademik">
                          <option value="2021/2022" <?php echo ($tahun_akademik->tahun_akademik == '2021/2022')? 'selected':''; ?> > 2021/2022 </option>
                          <option value="2022/2023" <?php echo ($tahun_akademik->tahun_akademik == '2022/2023')? 'selected':''; ?> > 2022/2023 </option>
                          <option value="2023/2024" <?php echo ($tahun_akademik->tahun_akademik == '2023/2024')? 'selected':''; ?> > 2023/2024 </option>
                          <option value="2024/2025" <?php echo ($tahun_akademik->tahun_akademik == '2024/2025')? 'selected':''; ?> > 2024/2025 </option>
                          <option value="2025/2026" <?php echo ($tahun_akademik->tahun_akademik == '2025/2026')? 'selected':''; ?> > 2025/2026 </option>
                          <option value="2026/2027" <?php echo ($tahun_akademik->tahun_akademik == '2026/2027')? 'selected':''; ?> > 2026/2027 </option>
                          <option value="2027/2028" <?php echo ($tahun_akademik->tahun_akademik == '2027/2028')? 'selected':''; ?> > 2027/2028 </option>
                          <option value="2028/2029" <?php echo ($tahun_akademik->tahun_akademik == '2028/2029')? 'selected':''; ?> > 2028/2029 </option>
                          <option value="2029/2030" <?php echo ($tahun_akademik->tahun_akademik == '2029/2030')? 'selected':''; ?> > 2029/2030 </option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="semester_ta">Semester</label>
                        <select class="form-control" name="semester_ta" id="semester_ta">
                          <option value="Ganjil" <?php echo ($tahun_akademik->semester_ta == 'Ganjil')? 'selected':''; ?> > Ganjil </option>
                          <option value="Genap" <?php echo ($tahun_akademik->semester_ta == 'Genap')? 'selected':''; ?> > Genap </option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                          <option value="1" <?php echo ($tahun_akademik->status == '1')? 'selected':''; ?> > Aktif </option>
                          <option value="0" <?php echo ($tahun_akademik->status == '0')? 'selected':''; ?> > Tidak-Aktif </option>
                        </select>
                      </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <a class="btn btn-warning" href="{{ route('tahun.akademik.view') }}">Kembali</a>
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