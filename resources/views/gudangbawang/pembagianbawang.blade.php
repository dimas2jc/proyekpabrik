@section('title') 
Soyuz - Datatable
@endsection 
@extends('gudangbawang.layouts.main')
@section('style')
<!-- DataTables css -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center mb-5">
        <div class="col-8">
            <h4 class="page-title text-left pl-5">Pembagian Bawang</h4>
        </div>
        <div class="col-4">
            <h4 class="page-title text-right pr-5">10 Juni 2020</h4>           
        </div>
    </div>
    <div class="row align-items-between">
        <div class="col">
            <div class="widgetbar">
                <button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#addModal">Tambah</button>
            </div>                        
        </div>
        <div class="col">
            <div class="widgetbar">
                <button id="hapus" class="btn btn-danger btn-lg btn-block">Hapus</button>
            </div>                        
        </div>
        <div class="col">
            <div class="widgetbar">
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#saveModal">Simpan Data</button>
            </div>                        
        </div>  
    </div>
    <div class="row align-items-center px-5 py-3">
        <div class="col">
            <div class="widgetbar">
                <form>
                    <div class="form-row align-items-center">
                        <div class="form-group col-sm-6">
                            <label for="orderbesok" class="text-left">Order Besok</label>
                            <input type="text" class="form-control" name="orderbesok" id="orderbesok" placeholder="100">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="stockbebas">Stock Bebas</label>
                            <input type="text" class="form-control" name="stockbebas" id="stockbebas" placeholder="10">
                        </div>
                    </div>
                    <div class="form-row align-items-center">
                        <div class="form-group col-sm-4">
                            <label for="ratasusut">Rata2 Susut</label>
                            <input type="text" class="form-control" name="ratasusut" id="ratasusut" placeholder="5.3%">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="targetkupas">Target Kupas (Kg)</label>
                            <input type="text" class="form-control" name="targetkupas" id="targetkupas" placeholder="74">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="proseshariini">Proses Hari Ini</label>
                            <input type="text" class="form-control" name="proseshariini" id="proseshariini" placeholder="77" data-toggle="modal" data-target="#ubahModal">
                        </div>
                    </div>
                </form>
            </div> 
        </div>  
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->    
<div class="contentbar">                
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="display table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Terima (Kg)</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="row1">
                                    <td data-toggle="modal" data-target="#ubahTerimaModal1">Tiger Nixon</td>
                                    <td class="terimakg" id="terima1">12</td>
                                    <td>
                                    <button type="button" class="delbtn btn btn-round btn-danger" id="del1"><i class="feather icon-trash-2"></i></button></td>
                                </tr>
                                <tr id="row2">
                                    <td>Garrett Winters</td>
                                    <td class="terimakg" id="terima2">12</td>
                                    <td>
                                    <button type="button" class="delbtn btn btn-round btn-danger" id="del2"><i class="feather icon-trash-2"></i></button></td>
                                </tr>
                                <tr id="row3">
                                    <td>Ashton Cox</td>
                                    <td class="terimakg" id="terima3">12</td>
                                    <td><button type="button" class="delbtn btn btn-round btn-danger" id="del3"><i class="feather icon-trash-2"></i></button></td>
                                </tr>
                                <tr id="row4">
                                    <td>Cedric Kelly</td>
                                    <td class="terimakg" id="terima4">12</td>
                                    <td>
                                    <button type="button" class="delbtn btn  btn-round btn-danger" id="del4"><i class="feather icon-trash-2"></i></button></td>
                                </tr>
                                <tr id="row5">
                                    <td>Airi Satou</td>
                                    <td class="terimakg" id="terima5">12</td>
                                    <td>
                                    <button type="button" class="delbtn btn  btn-round btn-danger" id="del5"><i class="feather icon-trash-2"></i></button></td>
                                </tr>
                                <tr id="row6">
                                    <td>Brielle Williamson</td>
                                    <td class="terimakg" id="terima6">12</td>
                                    <td>
                                    <button type="button" class="delbtn btn  btn-round btn-danger" id="del6"><i class="feather icon-trash-2"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
                <div class="modal-body">
                    <h2 class="page-title text-center" id="addModalTitle">Tambah Penerima</h2>
                    <div class="custom-control custom-checkbox" id="pegawai">
                        <div class="row m-3">
                            <div class="col text-center">
                                <input type="checkbox" class="custom-control-input" id="penerima7" value="Suyati">
                                <label class="custom-control-label" for="penerima7">Suyati</label>
                            </div>
                        </div>
                        <div class="row m-3 align-items-center">
                            <input type="checkbox" class="custom-control-input" id="penerima8" value="Ida">
                            <label class="custom-control-label" for="penerima8">Ida</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="tambahPenerima" class="btn btn-primary mx-auto">Simpan</button>
                </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-labelledby="modalUbahJumlah" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
                <div class="modal-body">
                    <h2 class="page-title text-center" id="modalUbahJumlah">Ubah Jumlah Proses</h2>
                    <div class="form-group mb-0">
                      <label for="berat">Berat (Kg)</label>
                      <input type="text" class="form-control" name="berat" id="berat" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btnubahJumlah" type="button" class="btn btn-primary mx-auto">Simpan</button>
                </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ubahTerimaModal1" tabindex="-1" role="dialog" aria-labelledby="modalUbahTerima" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="page-title text-center" id="modalUbahTerima">Ubah Penerimaan Tiger</h2>
                <div class="form-group mb-0">
                  <label for="validationCustom01">Berat (Kg)</label>
                  <input type="text" class="form-control" id="berat1" required>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btnubahTerima1" type="button" class="btn btn-primary ubahTerima mx-auto">Simpan</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="saveModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title text-black text-center my-5" id="saveModalTitle">Data Berhasil Disimpan</h5>
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                <!-- kurang button ditengah -->
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
@endsection 
@section('script')
<!-- Datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    "use strict";
    var table = $('#datatable').DataTable({
        "searching" : false,
        "paging" : false,
        "info" : false,
        "order": [[ 0, "asc" ]],
        responsive: true,
        "columnDefs": [
            { "visible": true, "targets": 2, "orderable":false , "width": "5%"},
            { "targets": 0 , "width": "50%" },
            { "targets": 1 , "width": "45%" }
        ]
    });
    //menghitung total terima dari tabel
    function hitungProsesHariIni(){
        var total = 0;
        $(".terimakg").each(function(){
            total+= Number($(this).html());
        });
        updateProsesHariIni(total);
    };

    function updateProsesHariIni(total){
        $("#proseshariini").val(total);
        $("#berat").val($("#proseshariini").val());
    };

    //membagi (total proses hari ini-terima custom) dibagi dengan jumlah tenaga kupas
    function hitungTotalProsesHariIni(){
        $("#proseshariini").val($("#berat").val());
        var jumlah = $(".terimakg").length;
        var minus = 0;
        $(".terimacustom").each(function(){
            minus+=Number($(this).html());
        });
        let kg = Number(($("#berat").val()-minus)/jumlah);
        $(".terimakg").each(function(){
            $(this).html(kg);
        });
    }
    //function inisiasi tombol delete
    function delbtn(){
        $(".delbtn").each(function(){
            $(this).click(function(){
                table
                    .row($(this).parents('tr'))
                    .remove()
                    .draw();
                    //menghitung ulang terima(kg) per orang
                hitungTotalProsesHariIni();
            });
        });
    }
    delbtn(); //inisiasi delbtn
    var column = table.column(2);
    column.visible(false);

    $(document).ready(function() {
        
        hitungProsesHariIni();

        //ubah total terima di atas tabel
        $("#btnubahJumlah").click(function(e){
            $("#ubahModal").modal('toggle');
            hitungTotalProsesHariIni();
        });

        //ubah terima per orang
        $(".ubahTerima").each(function(){
            $(this).click(function(){
                let id = $(this).attr('id').substr(13);
                $("#ubahTerimaModal"+id).modal('toggle');
                let berat = $("#berat"+id).val();
                $("#terima"+id).html(berat);
                hitungProsesHariIni();
                $("#terima"+id).removeClass("terimakg");
                $("#terima"+id).addClass("terimacustom");
            });
        });

        //function ketika button "hapus" diatas halaman di klik. mengubah visible tombol hapus di tiap row dan berganti tulisan(html)
        $("#hapus").click(function(){
            var column = table.column(2);
            column.visible(! column.visible());
            
            if($(this).html() == "Hapus"){
                $(this).html("Tutup Proses");
            }
            else{
                $(this).html("Hapus");
            }
        });

        //tombol simpan di modal tambah tenaga kupas di klik
        $("#tambahPenerima").click(function(){
            $("#addModal").modal('toggle');
            $("#pegawai input:checked").each(function(){
                //mengambil id dan nama
                var id = $(this).attr('id').substr(8); 
                var name = $(this).val();
                //menambahkan row baru
                table.row.add([
                    name,
                    0,
                    '<button type="button" class="delbtn btn btn-round btn-danger" id="del'+id+'"><i class="feather icon-trash-2"></i></button>'
                ]).node().id = 'row'+id;
                table.draw(false);
                //menambahkan attribut
                var column = $("#datatable tbody tr#row"+id).find("td:eq(0)");
                column.attr({
                    "data-toggle":'modal',
                    "data-target":'#ubahTerimaModal'+id
                });
                column = $("#datatable tbody tr#row"+id).find("td:eq(1)");
                column.attr({
                    class:'terimakg',
                    id:'terima'+id
                });
            });
            delbtn(); //refresh delbtn
            hitungTotalProsesHariIni(); //dibagi rata ulang terima(kg)
        });

    });
    

</script>
@endsection 