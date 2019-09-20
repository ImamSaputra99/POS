
<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $user['name'] ; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
       
        <?php 

        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`,`menu`
            FROM `user_menu` JOIN `user_access_menu`
              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
           WHERE `user_access_menu`.`role_id` = $role_id
           ORDER BY `user_access_menu`.`menu_id` ASC
          ";
    $menu = $this->db->query($queryMenu)->result_array();
         ?>

    <?php foreach($menu as $m) : ?>
       <li class="header"><?= $m['menu']; ?></li>

       <?php 
        $menuId = $m['id'];
          $querySubMenu = "SELECT *
                FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
               WHERE `user_sub_menu`.`menu_id` = $menuId
               AND `user_sub_menu`.`is_active` = 1
               ";
      $subMenu = $this->db->query($querySubMenu)->result_array();
         ?>
         <?php foreach ($subMenu as $sm) : ?>
          <?php if($title == $sm['title']) : ?>
          <li class="nav-item active">
          <?php else : ?>
          <li class="nav-item">
          <?php endif; ?>
          <a href="<?= $sm['url']; ?>">
            <i class="<?= $sm['icon']; ?>"></i> <span><?= $sm['title']; ?></span>
            <span class="pull-right-container">
             
            </span>
          </a>
          
        </li>
         <?php endforeach; ?>
      <?php endforeach; ?>
        <li >
          <a href="<?= base_url('admin/user'); ?>">
            <i class="fa fa-user"></i> <span>User</span>
            <span class="pull-right-container">
             
            </span>
          </a>
          
        </li>
        
       
      </ul>
     </section>
    <!-- /.sidebar -->
  </aside>
