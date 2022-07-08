<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Perawatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-body">
            <!--isi-->
            <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Biaya</th>
                <th scope="col">Kilometer Mobil</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Mobil Id</th>
                <th scope="col">Jenis Perawatann</th>
              </tr>
            </thead>
            <tbody>
              <?php $number=0; ?>
              <?php foreach($perawatandata as $m):?>
              <tr>
                <th scope="row"> <?php $number++; echo $number ?></th>
                <td> <?= $m->tanggal ?> </td>
                <td> <?= $m->biaya?> </td>
                <td> <?= $m->km_mobil?> </td>
                <td> <?= $m->deskripsi?> </td>
                <td> <?= $m->mobil_id ?> </td>
                <td> <?= $m->jenis_perawatan_id?> </td>
                
                <td> </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>