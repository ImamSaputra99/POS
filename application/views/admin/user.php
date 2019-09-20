
<div class="wrapper">  
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>List</small>
      </h1>
      
    </section>

    <section class="content">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data User</h3> 
          <div class="pull-right"><button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambah <i class="fa fa-plus fa-sm"></i></button></div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>User name</th>
                <th>Email</th>
                <th>Level</th>
                <th>Aktif</th>
                <th colspan="2" class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
           <?php 
           $no=1;
           foreach($data as $row) : ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->name; ?></td>
                <td><?= $row->email ?></td>
                <td><?= $row->role_id ?></td>
                <td><?= $row->is_active ?></td>
                  <td align="right"><?php echo anchor('admin/dashboard/edit/','<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?> </td>
                  <td> <?php echo anchor('admin/dashboard/hapus/','<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
                  
              </tr>
           <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>TAMBAH USER</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('auth/registrasi'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label>Name *</label>
          <input type="text" id="name" name="name" class="form-control" value="<?= set_value('name'); ?>">
          <?= form_error('name'); ?></small>
        </div>
         <div class="form-group">
          <label>Email *</label>
          <input type="text" id="email" name="email" class="form-control" value="<?= set_value('email'); ?>">
          <?= form_error('email'); ?></small>
        </div>
         <div class="form-group">
          <label>Password *</label>
          <input type="password" id="password1" name="password1" class="form-control" >
          <?= form_error('password1'); ?></small>
        </div>
         <div class="form-group">
          <label>Repeat Password *</label>
          <input type="password" id="password2" name="password2" class="form-control">
          <?= form_error('password2'); ?></small>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>
