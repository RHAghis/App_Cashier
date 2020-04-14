<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php $this->load->view('viewHead'); ?>

<body onload="javascript:setTimeout('location.reload(true);',60000);"> <!-- refresh every 60 second -->
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
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Penjualan</li>
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
                                <a href="<?php echo site_url('Penjualan/Transaksi') ?>" class="btn btn-block btn-outline-primary btn-rounded">
                                    <span><i class="fas fa-plus-circle"></i></span> Tambah Data Transaksi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- order table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Penjualan</h4>
                                <div class="table-responsive">
                                    <table id="mydata" class="table table-striped table-bordered display no-wrap"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Jam</th>
                                                <th>Kode Penjualan</th>
                                                <th>Customer</th>
                                                <th>Total</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="show_data">
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Jam</th>
                                                <th>Kode Penjualan</th>
                                                <th>Customer</th>
                                                <th>Total</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="ubahPenjualanModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header modal-colored-header bg-primary">
                                <h4 class="modal-title" id="primary-header-modalLabel">Ubah Data Penjualan
                                </h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">×</button>
                            </div>

                            <div class="modal-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="control-label col-xs-3" >Tanggal</label>
                                                        <div class="form-group">
                                                            <input id="tgl_edit" name="tgl_edit" type="text" class="form-control"
                                                                placeholder="Tanggal" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="control-label col-xs-3" >Jam</label>
                                                        <div class="form-group">
                                                            <input id="jam_edit" name="jam_edit" type="text" class="form-control"
                                                                placeholder="Jam" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Kode Penjualan</label>
                                            <div class="col-xs-9">
                                                <input name="kd_penjualan_edit" id="kd_penjualan_edit" class="form-control" type="text" placeholder="Kode Penjualan" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Customer</label>
                                            <div class="col-xs-9">
                                                <input name="customer_edit" id="customer_edit" class="form-control" type="text" placeholder="Nama Customer" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Total</label>
                                            <div class="col-xs-9">
                                                <input name="total_edit" id="total_edit" class="form-control" type="text" placeholder="Total Penjualan" >
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                <button class="btn btn-danger" id="btn_ubah">Update</button>
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
                                <h4 class="modal-title" id="myModalLabel">Hapus Penjualan</h4>
                            </div>
                            <form class="form-horizontal">
                            <div class="modal-body">
                                                  
                                    <input type="hidden" name="kd_penjualan" id="textkode" value="">
                                    <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus data penjualan ini?</p></div>
                                                
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

            tampil_data_penjualan();   
             
            $('#mydata').dataTable();
              
            //fungsi tampil data
            function tampil_data_penjualan(){
                $.ajax({
                    type  : 'ajax',
                    url   : '<?php echo site_url()?>/Penjualan/GetDataPenjualan',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                        '<td>'+data[i].tgl+'</td>'+
                                        '<td>'+data[i].jam+'</td>'+
                                        '<td>'+data[i].kd_penjualan+'</td>'+
                                        '<td>'+data[i].customer+'</td>'+
                                        '<td>'+data[i].total+'</td>'+
                                        '<td>'+
                                            '<a href="javascript:;" class="btn btn-circle btn-success item_edit" title="Edit" data="'+data[i].kd_penjualan+'"><i class="fas fa-edit"></i></a>'+' '+
                                            '<a href="javascript:;" class="btn btn-circle btn-danger item_hapus" title="Hapus" data="'+data[i].kd_penjualan+'"><i class="fas fa-trash"></i></a>'+
                                        '</td>'+
                                    '</tr>';
                        }
                        $('#show_data').html(html);
                    }
                });
            }

            //GET UPDATE
            $('#show_data').on('click','.item_edit',function(){
                var kd_penjualan=$(this).attr('data');
                $.ajax({
                    type : "GET",
                    url  : "<?php echo site_url()?>/Penjualan/GetDataPenjualanUsId",
                    dataType : "JSON",
                    data : {kd_penjualan:kd_penjualan},
                    success: function(data){
                        $.each(data,function(kd_penjualan, tgl, jam, customer, total){
                            $('#ubahPenjualanModal').modal('show');
                            $('[name="kd_penjualan_edit"]').val(data.kd_penjualan);
                            $('[name="tgl_edit"]').val(data.tgl);
                            $('[name="jam_edit"]').val(data.jam);
                            $('[name="customer_edit"]').val(data.customer);
                            $('[name="total_edit"]').val(data.total);
                        });
                    }
                });
                return false;
            });

            //Update data
            $('#btn_ubah').on('click',function(){
                var kd_penjualan  = $('#kd_penjualan_edit').val();
                var tgl           = $('#tgl_edit').val();
                var jam           = $('#jam_edit').val();
                var customer      = $('#customer_edit').val();
                var total         = $('#total_edit').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url()?>/Penjualan/EditDataPenjualan",
                    dataType : "JSON",
                    data : {kd_penjualan:kd_penjualan , tgl:tgl, jam:jam, customer:customer, total:total},
                    success: function(data){
                        $('[name="kd_penjualan_edit"]').val("");
                        $('[name="tgl_edit"]').val("");
                        $('[name="jam_edit"]').val("");
                        $('[name="customer_edit"]').val("");
                        $('[name="total_edit"]').val("");
                        $('#ubahPenjualanModal').modal('hide');
                        tampil_data_penjualan();
                    }
                });
                return false;
            });

            //get hapus
            $('#show_data').on('click','.item_hapus',function(){
                var id=$(this).attr('data');
                $('#ModalHapus').modal('show');
                $('[name="kd_penjualan"]').val(id);
            });

            //fungsi hapus data
            $('#btn_hapus').on('click',function(){
                var kd_penjualan=$('#textkode').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url()?>/Penjualan/DelDataPenjualan",
                    dataType : "JSON",
                    data : {kd_penjualan: kd_penjualan},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            Swal.fire({
                              position: 'center',
                              icon: 'success',
                              title: 'Data Berhasil Dihapus',
                              showConfirmButton: false,
                              timer: 1500
                            })
                            tampil_data_penjualan();
                    }
                });
                return false;
            });
            
        });
    </script>
</body>

</html>