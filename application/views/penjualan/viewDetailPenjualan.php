<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php $this->load->view('viewHead'); ?>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php $this->load->view('viewTopbar'); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Main Menu Of Top Jawa Apps</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('Home') ?>" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Detail Penjualan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?php echo site_url('Penjualan') ?>" class="btn btn-block btn-outline-primary btn-rounded">
                                    <span><i class="fas fa-arrow-alt-circle-left"></i></span> Kembali ke Penjualan
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-condensed">
                                    <tr>
                                        <td>Tanggal / Jam</td>
                                        <td> : </td>
                                        <td><?php echo $dataJual[0]->tgl; ?> / <?php echo $dataJual[0]->jam; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kode Penjualan</td>
                                        <td> : </td>
                                        <td><?php echo $dataJual[0]->kd_penjualan; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Customer</td>
                                        <td> : </td>
                                        <td><?php echo $dataJual[0]->customer; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- order table -->
                <div class="row">
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Detail Penjualan</h4>
                                <div class="table-responsive">
                                    <table id="mydata" class="table table-striped table-bordered display no-wrap"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Barang</th>
                                                <th>Qty</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="show_data">
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Barang</th>
                                                <th>Qty</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="card">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Barang</label>
                                            <div class="col-xs-9">
                                                <input id="kd_penjualan" name="kd_penjualan" type="text" value="<?php echo $dataJual[0]->kd_penjualan; ?>" hidden>
                                                <input list="dataBarang" name="kd_barang" id="kd_barang" class="form-control" type="text" placeholder="Nama Barang" onchange="return autofill();">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Harga</label>
                                            <div class="col-xs-9">
                                                <input name="harga" id="harga" class="form-control" type="text" placeholder="Harga Barang" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Qty</label>
                                            <div class="col-xs-9">
                                                <input name="qty" id="qty" class="form-control" type="text" placeholder="Jumlah Barang yang di ambil"  onkeyup="hitungJumlah()">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Jumlah</label>
                                            <div class="col-xs-9">
                                                <input name="jumlah" id="jumlah" class="form-control" type="text" placeholder="Jumlah Harga" >
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <datalist id="dataBarang">
                                    <?php
                                        foreach ($barang->result() as $b)
                                        {
                                            echo "<option value='$b->kd_barang'>$b->nama_barang</option>";
                                        }
                                    ?>
                                </datalist>
                                <button class="btn btn-success" id="btn_tambah">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--MODAL HAPUS-->
                <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"></button>
                                <h4 class="modal-title" id="myModalLabel">Hapus Detail Penjualan</h4>
                            </div>
                            <form class="form-horizontal">
                            <div class="modal-body">
                                                  
                                    <input type="hidden" name="no_det" id="textkode" value="">
                                    <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus barang ini?</p></div>
                                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--END MODAL HAPUS-->
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php $this->load->view('viewFooter'); ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php $this->load->view('viewScript'); ?>
    <script type="text/javascript">
        function autofill(){
            var kd_barang = document.getElementById('kd_barang').value;
            $.ajax({
                url  :"<?php echo site_url('Penjualan/AutoFillDetPenjualan') ?>",
                data :{kd_barang:kd_barang},
                success:function(data){
                    var hasil = JSON.parse(data);  
                    $.each(hasil, function(key,val){
                        document.getElementById('kd_barang').value=val.kd_barang;
                        document.getElementById('harga').value=val.harga_jual;                                  
                    });
                }
            });          
        }

        function hitungJumlah()
        {
            var harga = $("#harga").val();
            var qty = $("#qty").val();
            var jumlah = $("#jumlah").val(harga * qty);
        }

        tampil_data_detail_penjualan();   
             
        $('#mydata').dataTable();

        //fungsi tampil data
        function tampil_data_detail_penjualan(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('')?>/Penjualan/GetDataDetailPenjualan/<?php echo $dataJual[0]->kd_penjualan; ?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                    '<td>'+data[i].no_det+'</td>'+
                                    '<td>'+data[i].nama_barang+'</td>'+
                                    '<td>'+data[i].qty+'</td>'+
                                    '<td>'+data[i].harga+'</td>'+
                                    '<td>'+data[i].jumlah+'</td>'+
                                    '<td>'+
                                        '<a href="javascript:;" class="btn btn-circle btn-danger item_hapus" title="Hapus" data="'+data[i].no_det+'"><i class="fas fa-trash"></i></a>'+
                                    '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
            });
        }

        //fungsi simpan data
        $('#btn_tambah').on('click',function(){
            var kd_penjualan = $('#kd_penjualan').val();
            var kd_barang    = $('#kd_barang').val();
            var harga        = $('#harga').val();
            var qty          = $('#qty').val();
            var jumlah       = $('#jumlah').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url()?>/Penjualan/SaveDataDetailPenjualan",
                dataType : "JSON",
                data : {kd_penjualan:kd_penjualan , kd_barang:kd_barang, harga:harga, qty:qty, jumlah:jumlah},
                success: function(data){
                    $('[name="kd_penjualan"]').val("");
                    $('[name="kd_barang"]').val("");
                    $('[name="harga"]').val("");
                    $('[name="qty"]').val("");
                    $('[name="jumlah"]').val("");
                    tampil_data_detail_penjualan();
                }
            });
            return false;
        });

        //get hapus
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="no_det"]').val(id);
        });

        //fungsi hapus data
        $('#btn_hapus').on('click',function(){
            var no_det=$('#textkode').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url()?>/Penjualan/DelDataDetailPenjualan",
                dataType : "JSON",
                data : {no_det: no_det},
                success: function(data){
                        $('#ModalHapus').modal('hide');
                        tampil_data_detail_penjualan();
                }
            });
            return false;
        });
    </script>
</body>

</html>