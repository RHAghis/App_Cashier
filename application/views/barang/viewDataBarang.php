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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
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
        <?php $this->load->view('viewSidebar'); ?>
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
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Barang</li>
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
                                <div id="tambahBarangModal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-primary">
                                                <h4 class="modal-title" id="primary-header-modalLabel">Tambah Data Barang
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <form class="form-horizontal">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-3" >Kode Barang</label>
                                                        <div class="col-xs-9">
                                                            <input name="kd_barang" id="kd_barang" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-3">Kategori</label>
                                                        <div class="col-xs-9">
                                                            <select class="form-control" style="width:335px;" name="kategori" id="kategori">
                                                                <option selected>Pilih Kategori...</option>
                                                                <?php foreach($listKategori as $row):?>
                                                                    <option value="<?php echo $row->kd_kategori;?>"><?php echo $row->nama_kategori;?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-3" >Nama Barang</label>
                                                        <div class="col-xs-9">
                                                            <input name="nama_barang" id="nama_barang" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-3" >Warna</label>
                                                        <div class="col-xs-9">
                                                            <input name="warna" id="warna" class="form-control" type="text" placeholder="Warna" style="width:335px;" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-3" >Harga Jual</label>
                                                        <div class="col-xs-9">
                                                            <input name="harga_jual" id="harga_jual" class="form-control" type="text" placeholder="Harga Jual Barang" style="width:335px;" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-3" >Stok</label>
                                                        <div class="col-xs-9">
                                                            <input name="stock" id="stock" class="form-control" type="text" placeholder="Stok Barang" style="width:335px;" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                <button class="btn btn-danger" id="btn_simpan">Simpan</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <button class="btn btn-block btn-outline-primary btn-rounded" data-toggle="modal"
                                        data-target="#tambahBarangModal">
                                    <span><i class="fas fa-plus-circle"></i></span> Tambah Data Barang
                                </button>
                            </div>
                        </div> 
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- Primary Header Modal -->
                                <div id="kategori-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-primary">
                                                <h4 class="modal-title" id="primary-header-modalLabel">List Kategori
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="table-responsive">
                                                    <table id="dataKategori" class="table table-striped table-bordered display no-wrap"
                                                        style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Kode Kategori</th>
                                                                <th>Kategori</th>
                                                                <th>Opsi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="show_data_kategori">
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <button class="btn btn-block btn-outline-success btn-rounded" data-toggle="modal"
                                        data-target="#kategori-modal">
                                    <span><i class="fas fa-list"></i></span> List Kategori
                                </button>
                            </div>
                        </div> 
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-block btn-outline-primary btn-rounded" data-toggle="modal"
                                        data-target="#tambah-kategori-modal">
                                    <span><i class="fas fa-plus-circle"></i></span> Tambah Data Kategori
                                </button>
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- order table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Barang</h4>
                                <div class="table-responsive">
                                    <table id="mydata" class="table table-striped table-bordered display no-wrap"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Kode Barang</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th>Warna</th>
                                                <th>Harga Jual</th>
                                                <th>Stok</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="show_data">
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Kode Barang</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th>Warna</th>
                                                <th>Harga Jual</th>
                                                <th>Stok</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="editBarangModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header modal-colored-header bg-primary">
                                <h4 class="modal-title" id="primary-header-modalLabel">Ubah Data Barang
                                </h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">×</button>
                            </div>
                            <form class="form-horizontal">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Kode Barang</label>
                                        <div class="col-xs-9">
                                            <input name="kd_barang_edit" id="kd_barang_edit" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3">Kategori</label>
                                        <div class="col-xs-9">
                                            <select class="form-control" style="width:335px;" name="kategori_edit" id="kategori_edit">
                                                <option selected>Pilih Kategori...</option>
                                                <?php foreach($listKategori as $row):?>
                                                    <option value="<?php echo $row->kd_kategori;?>"><?php echo $row->nama_kategori;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Nama Barang</label>
                                        <div class="col-xs-9">
                                            <input name="nama_barang_edit" id="nama_barang_edit" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Warna</label>
                                        <div class="col-xs-9">
                                            <input name="warna_edit" id="warna_edit" class="form-control" type="text" placeholder="Warna" style="width:335px;" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Harga Jual</label>
                                        <div class="col-xs-9">
                                            <input name="harga_jual_edit" id="harga_jual_edit" class="form-control" type="text" placeholder="Harga Jual Barang" style="width:335px;" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Stok</label>
                                        <div class="col-xs-9">
                                            <input name="stock_edit" id="stock_edit" class="form-control" type="text" placeholder="Stok Barang" style="width:335px;" >
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                <button class="btn btn-danger" id="btn_update">Update</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!--MODAL HAPUS-->
                <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"></button>
                                <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                            </div>
                            <form class="form-horizontal">
                            <div class="modal-body">
                                                  
                                    <input type="hidden" name="kd_barang" id="textkode" value="">
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
        $(document).ready(function(){
            tampil_data_barang();   //pemanggilan fungsi tampil barang.
             
            $('#mydata').dataTable();
              
            //fungsi tampil barang
            function tampil_data_barang(){
                $.ajax({
                    type  : 'ajax',
                    url   : '<?php echo site_url()?>/Barang/GetDataBarangAjax',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                        '<td>'+data[i].kd_barang+'</td>'+
                                        '<td>'+data[i].kategori+'</td>'+
                                        '<td>'+data[i].nama_barang+'</td>'+
                                        '<td>'+data[i].warna+'</td>'+
                                        '<td>'+data[i].harga_jual+'</td>'+
                                        '<td>'+data[i].stock+'</td>'+
                                        '<td>'+
                                            '<a href="javascript:;" class="btn btn-circle btn-success item_edit" title="Edit" data="'+data[i].kd_barang+'"><i class="fa fa-edit"></i></a>'+' '+
                                            '<a href="javascript:;" class="btn btn-circle btn-danger item_hapus" title="Hapus" data="'+data[i].kd_barang+'"><i class="fa fa-trash"></i></a>'+
                                        '</td>'+
                                    '</tr>';
                        }
                        $('#show_data').html(html);
                    }
                });
            }

            //Simpan Barang
            $('#btn_simpan').on('click',function(){
                var kd_barang   = $('#kd_barang').val();
                var kategori    = $('#kategori').val();
                var nama_barang = $('#nama_barang').val();
                var warna       = $('#warna').val();
                var harga_jual  = $('#harga_jual').val();
                var stock       = $('#stock').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url()?>/Barang/SaveDataBarang",
                    dataType : "JSON",
                    data : {kd_barang:kd_barang , kategori:kategori, nama_barang:nama_barang, warna:warna, harga_jual:harga_jual, stock:stock},
                    success: function(data){
                        $('[name="kd_barang"]').val("");
                        $('[name="kategori"]').val("");
                        $('[name="nama_barang"]').val("");
                        $('[name="warna"]').val("");
                        $('[name="harga_jual"]').val("");
                        $('[name="stock"]').val("");
                        $('#tambahBarangModal').modal('hide');
                        tampil_data_barang();
                    }
                });
                return false;
            });

            //GET UPDATE
            $('#show_data').on('click','.item_edit',function(){
                var kd_barang=$(this).attr('data');
                $.ajax({
                    type : "GET",
                    url  : "<?php echo site_url()?>/Barang/GetBarangUsId",
                    dataType : "JSON",
                    data : {kd_barang:kd_barang},
                    success: function(data){
                        $.each(data,function(kd_barang, kategori, nama_barang, warna, harga_jual, stock){
                            $('#editBarangModal').modal('show');
                            $('[name="kd_barang_edit"]').val(data.kd_barang);
                            $('[name="kategori_edit"]').val(data.kd_kategori);
                            $('[name="nama_barang_edit"]').val(data.nama_barang);
                            $('[name="warna_edit"]').val(data.warna);
                            $('[name="harga_jual_edit"]').val(data.harga_jual);
                            $('[name="stock_edit"]').val(data.stock);
                        });
                    }
                });
                return false;
            });

            //Update Barang
            $('#btn_update').on('click',function(){
                var kd_barang   = $('#kd_barang_edit').val();
                var kategori    = $('#kategori_edit').val();
                var nama_barang = $('#nama_barang_edit').val();
                var warna       = $('#warna_edit').val();
                var harga_jual  = $('#harga_jual_edit').val();
                var stock       = $('#stock_edit').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url()?>/Barang/EditDataBarang",
                    dataType : "JSON",
                    data : {kd_barang:kd_barang , kategori:kategori, nama_barang:nama_barang, warna:warna, harga_jual:harga_jual, stock:stock},
                    success: function(data){
                        $('[name="kd_barang_edit"]').val("");
                        $('[name="kategori_edit"]').val("");
                        $('[name="nama_barang_edit"]').val("");
                        $('[name="warna_edit"]').val("");
                        $('[name="harga_jual_edit"]').val("");
                        $('[name="stock_edit"]').val("");
                        $('#editBarangModal').modal('hide');
                        tampil_data_barang();
                    }
                });
                return false;
            });

            //GET HAPUS
            $('#show_data').on('click','.item_hapus',function(){
                var id=$(this).attr('data');
                $('#ModalHapus').modal('show');
                $('[name="kd_barang"]').val(id);
            });

            //Hapus Barang
            $('#btn_hapus').on('click',function(){
                var kd_barang=$('#textkode').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url()?>/Barang/DelDataBarang",
                    dataType : "JSON",
                    data : {kd_barang: kd_barang},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_barang();
                    }
                });
                return false;
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            tampil_data_kategori();   
             
            $('#dataKategori').dataTable();
              
            function tampil_data_kategori(){
                $.ajax({
                    type  : 'ajax',
                    url   : '<?php echo site_url()?>/Barang/GetDataKategoriAjax',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                        '<td>'+data[i].kd_kategori+'</td>'+
                                        '<td>'+data[i].nama_kategori+'</td>'+
                                        '<td>'+
                                            '<a href="javascript:;" class="btn btn-circle btn-success" title="Edit" data="'+data[i].kd_kategori+'"><i class="fa fa-edit"></i></a>'+' '+
                                            '<a href="javascript:;" class="btn btn-circle btn-danger" title="Hapus" data="'+data[i].kd_kategori+'"><i class="fa fa-trash"></i></a>'+
                                        '</td>'+
                                    '</tr>';
                        }
                        $('#show_data_kategori').html(html);
                    }
     
                });
            }
        });
    </script>
</body>

</html>