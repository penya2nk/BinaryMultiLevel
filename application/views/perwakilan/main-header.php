<style type="text/css">
  .sekolah{
    float: left;
    background-color: transparent;
    background-image: none;
    padding: 15px 15px;
    font-family: fontAwesome;
    color:#fff;
  }

  .sekolah:hover{
    color:#fff;
  }
</style>
        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>PERWAKILAN</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php 
                $log = $this->model_perwakilan->perwakilan_edit($this->session->id)->row_array(); 
                $foto = 'users.gif';
                  echo "<img src='".base_url()."/asset/admin/dist/img/$foto' class='user-image' alt='User Image'>
                          <span class='hidden-xs'>$log[nama_perwakilan]</span>";
              ?>
                </a>
              </li>

              <li><a target='_BLANK' href="<?php echo base_url(); ?>"><i class="glyphicon glyphicon-new-window"></i></a></li>
              <li><a href="<?php echo base_url(); ?>distributor/logout"><i class="glyphicon glyphicon-off"></i></a></li>
            </ul>
          </div>
        </nav>