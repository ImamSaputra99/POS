
<div class="wrapper">  
  <!-- =============================================== -->

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><strong>Menu Management</strong></h1>
      </section>
      <br>
      <div class="row">
        <div class="col-lg-6">
          <div class="col-lg-6">
            <div class="btn btn-primary">Tambah</div>
          </div>

        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Menu</th>
      <th scope="col">Aksi</th>
     
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; 
    foreach ($menu as $m) : ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $m['menu']; ?></td>
      <td>
          <a href="" class="btn btn-danger btn-sm">Hapus</a>
          <a href="" class="btn btn-warning btn-sm">Edit</a>
      </td>
    
    </tr>
  
  <?php endforeach;
   ?>
    </tbody>
       </table>
        
      </div>

    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
</div>

