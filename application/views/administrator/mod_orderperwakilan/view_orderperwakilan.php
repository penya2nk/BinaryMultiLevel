            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Semua Data Pemesanan Perwakilan</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url(); ?>administrator/tambah_orderperwakilan'>Tambahkan Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:40px'>No</th>
                        <th>Nama Perwakilan</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Waktu Order</th>
                        <th style='width:75px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record->result_array() as $row){
                    $ex = explode(' ',$row['waktu_order']);
                    echo "<tr><td>$no</td>
                              <td><a href='".base_url()."administrator/detail_perwakilan/$row[id_perwakilan]'>$row[nama_perwakilan]</a></td>
                              <td>$row[nama_produk]</td>
                              <td>".rupiah($row['jumlah'])."</td>
                              <td>$row[keterangan]</td>
                              <td>".tgl_indo($ex[0]).", ".$ex[1]." WIB</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."administrator/edit_orderperwakilan/$row[id_perwakilan_order]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."administrator/delete_orderperwakilan/$row[id_perwakilan_order]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>