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
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Transaksi Penjualan</li>
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
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Informasi Transaksi</h4>
                                <div class="form-horizontal">

                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >No. Transaksi</label>
                                        <div class="col-xs-9">
                                            <input name="kd_penjualan" id="kd_penjualan" class="form-control" type="text" placeholder="No Transaksi" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <label class="control-label col-xs-3" >Tanggal</label>
                                                    <div class="form-group">
                                                        <input id="tgl" name="tgl" type="text" class="form-control" placeholder="Tanggal" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <label class="control-label col-xs-3" >Jam</label>
                                                    <div class="form-group">
                                                        <input id="jam" name="jam" type="text" class="form-control" placeholder="Jam" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Pelanggan</label>
                                        <div class="col-xs-9">
                                            <input name="customer" id="customer" class="form-control" type="text" placeholder="Masukkan Nama Pelanggan" >
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Detail Transaksi</h4>
                                <div class="table-responsive">
                                    <table id="autocomplete_table" class="table table-bordered display no-wrap autocomplete_table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col" style="width: 80px">QTY</th>
                                                <th scope="col">Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="row_1">
                                                <th id="delete_1" scope="row" class="delete_row"><button class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></button></th>
                                                <td>
                                                    <input type="text" data-field-name="nama_barang" name="namaBarang[]" id="namaBarang_1" class="form-control autocomplete_txt" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="text" data-field-name="harga" name="hargaBarang[]" id="hargaBarang_1" class="form-control autocomplete_txt" autocomplete="off" readonly >
                                                </td>
                                                <td>
                                                    <input type="text" name="qtyBarang[]" id="qtyBarang_1" class="form-control autocomplete_txt qtyBar" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="text" name="subTotal[]" id="subTotal_1" class="form-control autocomplete_txt" autocomplete="off" readonly>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="alert alert-info row-total">
                                        <div class="btn-container col-7">
                                            <button class="btn btn-success" id="addNew" type="button">
                                                Add New
                                            </button>
                                        </div>
                                        <div class="row row-right">
                                            <h2 class="col-md-4 text-right" style="font-family:Rubik,sans-serif; color:gray;">Total :</h2>
                                            <div class="col-md-8">
                                                <input type="text" id="totalTran" name="totalTran" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="row obj-right">
                                        <div class="form-horizontal">
                                            <div class="row">
                                                <h4 class="col-md-4 text-right" style="font-family:Rubik,sans-serif; color:gray;">Bayar :</h4 >
                                                <div class="col-md-8">
                                                    <input type="text" id="bayarTran" name="bayarTran" class="form-control">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                <h4 class="text-right";  style="margin-left: -5px; font-family:Rubik,sans-serif; color:gray;">Kembalian :</h4 >
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="kembaliTran" name="kembaliTran" class="form-control" readonly>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row obj-right" style="padding-right:15px">
                                                <div class="col-xs-5" style="padding-right:20px">
                                                    <button class="btn btn-rounded btn-success" id="simpanTransaksi">Simpan</button> 
                                                </div>
                                                <!-- <div class="col-xs-5">
                                                    <button class="btn btn-rounded btn-warning" id="cetakStruk">Cetak</button>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
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
        getDateTime();
        createId() 

        function getDateTime(){
            var today = new Date();
            var dd = today.getDate();

            var mm = today.getMonth()+1; 
            var yyyy = today.getFullYear();
            if(dd<10) 
            {
                dd='0'+dd;
            } 

            if(mm<10) 
            {
                mm='0'+mm;
            } 
            todayStr = yyyy+'-'+mm+'-'+dd;

            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            console.log('Date : ')
            console.log(today)
            document.getElementById("tgl").value = todayStr;
            document.getElementById("jam").value = time;
        }

        function createId() {
            var id_jual;
            var numb = 0;
            var today = new Date();
            var dd = today.getDate();

            var mm = today.getMonth()+1; 
            var yyyy = today.getFullYear();
            if(dd<10) 
            {
                dd='0'+dd;
            } 

            if(mm<10) 
            {
                mm='0'+mm;
            }
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url()?>/Penjualan/createIdPenjualan',
                async : false,
                dataType : 'json',
                success : function(data){
                    if (id_jual != 0) {
                        var kd_jual;
                        var i;
                        for(i=0; i<data.length; i++){
                            kd_jual = data[i].kd_penjualan
                        }
                        id_jual = kd_jual.split("000");
                        console.log('kd_jual : ')
                        console.log(kd_jual)
                        console.log('Split : ')
                        console.log(id_jual)
                        numb = parseInt(id_jual[1]) + 1;    
                    } else {
                        numb;
                    }
                }
            });
            console.log('Numb : ')
            console.log(numb)
            if (numb != 0) 
            {
                todayStr = yyyy.toString()+mm.toString()+dd.toString()+'000'+numb;
                document.getElementById("kd_penjualan").value = todayStr;
            } else {
                todayStr = yyyy.toString()+mm.toString()+dd.toString()+'000'+1;
                document.getElementById("kd_penjualan").value = todayStr;
            }
        }

        // function to_rupiah(angka){
        //     var rev     = parseInt(angka, 10).toString().split('').reverse().join('');
        //     var rev2    = '';
        //     for(var i = 0; i < rev.length; i++){
        //         rev2  += rev[i];
        //         if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
        //             rev2 += '.';
        //         }
        //     }
        //     return 'Rp. ' + rev2.split('').reverse().join('');
        // }
        
        $(document).ready(function(){
            var addBtn, rowcount, tableBody;

            addBtn = $("#addNew");
            rowcount = $("#autocomplete_table tbody tr").length+1;
            tableBody = $("#autocomplete_table tbody");

            function formHtml() {
                html = '<tr id="row_'+rowcount+'">';
                html += '<th id="delete_'+rowcount+'" scope="row" class="delete_row"><button class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></button></th>';
                html += '<td>';
                html += '<input type="text" data-field-name="nama_barang" name="namaBarang[]" id="namaBarang_'+rowcount+'" class="form-control autocomplete_txt" autocomplete="off">';
                html += '</td>';
                html += '<td>';
                html += '<input type="text" data-field-name="harga" name="hargaBarang[]" id="hargaBarang_'+rowcount+'" class="form-control autocomplete_txt" autocomplete="off" readonly>';
                html += '</td>';
                html += '<td>';
                html += '<input type="text" name="qtyBarang[]" id="qtyBarang_'+rowcount+'" class="form-control autocomplete_txt qtyBar" autocomplete="off">';
                html += '</td>';

                html += '<td>';
                html += '<input type="text" name="subTotal[]" id="subTotal_'+rowcount+'" class="form-control autocomplete_txt" autocomplete="off" readonly>';
                html += '</td>';
                html += '</tr>';
                //increment this when new added 
                rowcount++;
                
                return html;
            }

            function addNewRow() { 
                var html = formHtml();
                //console.log(html);
                
                tableBody.append( html );
            }

            function deleteRow() { 
                // var id, rowNo;
                // id = $(this).attr('id');
                // //console.log(id);
                // idArr = id.split("_");
                // //console.log(idArr);
                // rowNo = idArr[idArr.length - 1];
                // //console.log(rowNo);
                // $("#row_"+rowNo).remove();

                var rowNo;
                rowNo = getId($(this));
                //console.log(rowNo);
                $("#row_"+rowNo).remove();
                var delet = allTotal.splice(rowNo)
                console.log('Delet = ')
                console.log(delet)
                getAllTotal()
            }

            function getId(element){
                var id, idArr;
                id = element.attr('id');
                idArr = id.split("_");
                return idArr[idArr.length - 1];
            }

            let allTotal = new Array()


            function getSubtotal(){
                var rowNo;
                rowNo = getId($(this));
                let field = document.getElementById('subTotal_'+rowNo)
                let harga = parseInt(document.getElementById('hargaBarang_'+rowNo).value)
                let qty = parseInt(document.getElementById('qtyBarang_'+rowNo).value)
                let total =  harga * qty
                allTotal[rowNo] = total 
                field.value = total
                console.log(total)
                console.log('All Total = ')
                console.log(allTotal)
                getAllTotal()
            }
            
            function getAllTot(total, num) {
                return total + num
            }

            function getAllTotal() {
                var bayar = allTotal.reduce(getAllTot)
                var txtBayar = document.getElementById('totalTran')
                txtBayar.value = bayar
                console.log('Bayar = ')
                console.log(bayar)
            }

            function getKembalian() {
                var totalSmua = document.getElementById('totalTran').value
                var cash = document.getElementById('bayarTran').value
                var kmbalian = cash - totalSmua
                $('#kembaliTran').val(kmbalian);
            }

            function handleAutocomplete() {
                var fieldName,  currentEle; 
                currentEle = $(this);

                fieldName = currentEle.data('field-name');
                if(typeof fieldName === 'undefined') {
                    return false;
                }

                currentEle.autocomplete({
                    source: function( data, cb ) {   
                        $.ajax({
                            url: '<?php echo site_url()?>/Penjualan/getProducts',
                            method: 'GET',
                            dataType: 'json',
                            data: {
                                namaBar:  data.term,
                                fieldName: fieldName
                            },
                            success: function(res){
                                var result;
                                result = [
                                    {
                                        label: 'There is no matching record found for '+data.term,
                                        value: ''
                                    }
                                ];
                                console.log("before formart", res);
                                

                                if (res.length) {
                                    result = $.map(res, function(obj){
                                        
                                        return {
                                            label: obj[fieldName],
                                            value: obj[fieldName],
                                            data : obj
                                        };
                                    });
                                }
                                console.log("After formart", result);
                                
                                cb(result);
                            }
                        });
                    },
                    autoFocus: true,            
                    minLength: 1,
                    select: function( event, selectedData ) {
                        console.log(selectedData);
                        if(selectedData && selectedData.item && selectedData.item.data){
                            var rowNo, data;
                            rowNo = getId(currentEle);
                            data = selectedData.item.data;
                            $('#namaBarang_'+rowNo).val(data.nama_barang);
                            $('#hargaBarang_'+rowNo).val(data.harga_jual);
                        }
                    }               
                });
            }

            //fungsi simpan data
            $('#simpanTransaksi').on('click',function(){
                var rowNo        = $("#autocomplete_table tbody tr").length;
                var tgl          = $('#tgl').val();
                var jam          = $('#jam').val();
                var kd_penjualan = $('#kd_penjualan').val();
                var customer     = $('#customer').val();
                var totalBeli    = $('#totalTran').val();
                var bayar        = $('#bayarTran').val();
                var kembalian    = $('#kembaliTran').val();
                
                var nama_barang = $("input[name='namaBarang[]']").map(function(){return $(this).val();}).get();
                var qty_barang = $("input[name='qtyBarang[]']").map(function(){return $(this).val();}).get();
                var harga_barang = $("input[name='hargaBarang[]']").map(function(){return $(this).val();}).get();
                var subTotalBarang = $("input[name='subTotal[]']").map(function(){return $(this).val();}).get();

                var detBeli = new Array();
                detBeli.push(nama_barang[0],qty_barang[0],harga_barang[0],subTotalBarang[0])

                console.log("Row :", rowNo);
                console.log("Kode Penjualan :", kd_penjualan);
                console.log("TGL :", tgl);
                console.log("Jam :", jam);
                console.log("Pelanggan :", customer);
                console.log("Nama Barang :", nama_barang);
                console.log("QTY Barang :", qty_barang);
                console.log("Harga Barang :", harga_barang);
                console.log("Sub Total Barang :", subTotalBarang);
                console.log("Total Beli :", totalBeli);
                console.log("Detail Beli :", detBeli);

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url()?>/Penjualan/saveTransaksi",
                    dataType : "JSON",
                    data : {tgl:tgl , jam:jam, kd_penjualan:kd_penjualan, customer:customer, totalTran:totalBeli, bayar:bayar, kembalian:kembalian},
                    success: function(data){
                        $('[name="tgl"]').val(tgl);
                        $('[name="jam"]').val(jam);
                        $('[name="kd_penjualan"]').val(kd_penjualan);
                        $('[name="customer"]').val(customer);
                        $('[name="totalTran"]').val(totalBeli);
                        $('[name="bayar"]').val(bayar);
                        $('[name="kembalian"]').val(kembalian);

                        for (var i = 0; i < rowNo; i++) 
                        {
                            var nama_barang2    = nama_barang[i]
                            var qty_barang2     = qty_barang[i]
                            var harga_barang2   = harga_barang[i]
                            var subTotalBarang2 = subTotalBarang[i]
                            console.log("NamBar2 :", nama_barang2);
                            console.log("qtyBar2 :", qty_barang2);
                            console.log("hargaBar2 :", harga_barang2);
                            console.log("ttaBar2 :", subTotalBarang2);
                            $.ajax({
                                type : "POST",
                                url  : "<?php echo site_url()?>/Penjualan/saveDetailTransaksi",
                                dataType : "JSON",
                                data : {kd_penjualan:kd_penjualan , nama_barang:nama_barang2, qty:qty_barang2, harga:harga_barang2, jumlah:subTotalBarang2},
                                success: function(data){
                                    $('[name="kd_penjualan"]').val(kd_penjualan);
                                    $('[name="nama_barang"]').val(nama_barang2);
                                    $('[name="qty"]').val(qty_barang2);
                                    $('[name="harga"]').val(harga_barang2);
                                    $('[name="jumlah"]').val(subTotalBarang2);
                                }
                            });
                        }
                        Swal.fire({
                          title: 'Simpan Dulu Yaa Kakak..',
                          text: "Terima Kasih ^_^",
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Simpan'
                        }).then((result) => {
                          if (result.value) {
                            Swal.fire
                            ({
                              title: 'Tersimpan!',
                              text: 'Transaksi Telah Tersimpan',
                              icon: 'success',
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: '<a href="<?php echo site_url('Penjualan/cetakStruk/')?>"'+kd_penjualan+ 'style="color:#ffffff">Cetak Struk</a>',
                            })
                          }
                        })
                        //window.location.reload();
                    }
                });
                return false;
            });

            function registerEvents() {
                addBtn.on("click", addNewRow);
                $(document).on('click', '.delete_row', deleteRow);
                //register autocomplete events
                $(document).on('focus','.autocomplete_txt', handleAutocomplete);
                $(document).on('keyup','.qtyBar', getSubtotal);
                $(document).on('keyup','#bayarTran', getKembalian);
            }
            registerEvents();
        });

    </script>
</body>

</html>