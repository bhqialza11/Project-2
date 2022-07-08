<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Merk</h1>
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
                <th scope="col">nopol</th>
                <th scope="col">warna</th>
                <th scope="col">biaya sewa</th>
                <th scope="col">deskripsi</th>
                <th scope="col">cc</th>
                <th scope="col">tahun</th>
                <th scope="col">merk_id</th>
                <th scope="col">foto</th>
                <th scope="col">Aksi</th>
                
              </tr>
            </thead>
            <tbody>
              <?php $number=0; ?>
              <?php foreach($mobildata as $m):?>
              <tr>
                <th scope="row"> <?php $number++; echo $number ?></th>
                <td> <?= $m->nopol?> </td>
                <td> <?= $m->warna ?> </td>
                <td> <?= $m->biaya_sewa?> </td>
                <td> <?= $m->deskripsi?> </td>
                <td> <?= $m->cc ?> </td>
                <td> <?= $m->tahun ?> </td>
                <td> <?= $m->merk_id?> </td>
                <td> <?= $m->foto ?> </td>
                <td><a href="#" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
                <a href="#" class="btn btn-secondary" role="button" aria-pressed="true">Hapus</a> </td>
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