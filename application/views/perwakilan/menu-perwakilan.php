        <section class="sidebar">
          <?php
          $log = $this->model_perwakilan->perwakilan_edit($this->session->id)->row_array(); 
          $foto = 'users.gif';
            echo "<div class='user-panel'>
              <div class='pull-left image'>
                <img src='".base_url()."/asset/foto_user/$foto' class='img-circle' alt='User Image'>
              </div>
              <div class='pull-left info'>
                <p>$log[nama_perwakilan]</p>
                <a href=''><i class='fa fa-circle text-success'></i> Online</a>
              </div>
            </div>";
          ?>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU perwakilan</li>
            <li><a href="<?php echo base_url(); ?>perwakilan/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="<?php echo base_url(); ?>perwakilan/profile"><i class="fa fa-user"></i> Data Profile / Account</a></li>
            <li><a href="<?php echo base_url(); ?>perwakilan/produk"><i class="fa fa-folder-open"></i> Data Stok Produk</a></li>
            <li><a href="<?php echo base_url(); ?>perwakilan/pembelian"><i class="fa fa-shopping-cart"></i> Data Pembelian Produk</a></li>
            <li><a href="<?php echo base_url(); ?>perwakilan/penjualankonsumen"><i class="fa fa-filter"></i> Data Penjualan Konsumen</a></li>
            <li><a href="<?php echo base_url(); ?>perwakilan/penjualanagen"><i class="fa fa-filter"></i> Data Penjualan Agen</a></li>
            <li><a href="<?php echo base_url(); ?>perwakilan/penjualandistributor"><i class="fa fa-filter"></i> Data Penjualan Cabang</a></li>
            <li><a href="<?php echo base_url(); ?>perwakilan/orderkode"><i class="fa fa-key"></i> Order Kode Aktivasi</a></li>
            <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
          </ul>
        </section>