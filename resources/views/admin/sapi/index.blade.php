@extends('layouts.admin')
@section('title')
    Data Sapi | Sitem Pendukung Keputusan Pembelian Sapi
@endsection
@section('content')
<br>
<div class="row">
    <div class="col-12">
        <div class="card-box">

            <h4 class="header-title m-t-0">Tambah Sapi</h4>
            @include('admin.sapi.lihat-sapi')
            @include('admin.sapi.add')
            {{-- @include('admin.user.edit-user') --}}


            <div class="button-list">
                <!-- Custom width modal -->
                <button type="button" class="btn btn-info waves-light waves-effect w-md" data-toggle="modal" data-target="#tambah-mahasiswa" data-table="#tabel-user"><i class="mdi mdi-library-plus"></i> Tambah Data</button>
            </div>
        </div>
    </div><!-- end col -->
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Daftar Sapi</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-mahasiswa" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Merk Sapi</th>
                    <th>Keterangan</th>
                    <th>Bobot Badan</th>
                    <th>Penghasilan Susu</th>
                    <th>Umur Sapi</th>
                    <th>Konsumsi Pakan</th>
                    <th>Prices</th>
                    <th>Aksi</th>                                            
                </tr>
                </thead>


                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
<!-- end row -->


@endsection
@push('scripts')
        <script type="text/javascript">
            function lihatSapi(trigerer){
                    var tr = $(trigerer).parent().parent();
                    var modal = $(trigerer).data("target");
                    $(modal + " #merksapi").html($("#table-mahasiswa").DataTable().row(tr).data().merksapi);
                    $(modal + " #keterangan").html($("#table-mahasiswa").DataTable().row(tr).data().keterangan);
                    $(modal + " #susu").html("Susu: "+$("#table-mahasiswa").DataTable().row(tr).data().susu);
                    $(modal + " #bobot").html("Bobot Badan: "+$("#table-mahasiswa").DataTable().row(tr).data().bobot);
                    $(modal + " #umur").html("umur"+$("#table-mahasiswa").DataTable().row(tr).data().umur);
                    $(modal + " #konsumsi").html("konsumsi"+$("#table-mahasiswa").DataTable().row(tr).data().konsumsi);
                    $(modal + " #price").html("Prices"+$("#table-mahasiswa").DataTable().row(tr).data().Price_rupiah);
                }
            // function editDataUser(trigerer){
            //         var tabel = $(trigerer).parent().data('table-target');
            //         var modal = $(trigerer).data('target');
            //         var tr =$(trigerer).parent().parent().parent();
            //         data = $("table#"+tabel).DataTable().row(tr).data();
            //         var form = modal+" form ";
            //         var role = JSON.parse(data.role_id);
            //         $(form+"input#name").val(data.name);
            //         $(form+"input#email").val(data.email);
            //         $(form+" input[type=checkbox]").prop("checked",false);
            //         role.forEach(role_id => {
            //             $(form+" input#role_"+role_id).prop("checked",true);
            //         });
            //         $(form+"input#id").val(data.id);
            //     }
            $(document).ready(function() {
                $("#table-mahasiswa").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('admin.sapi.index') !!}',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'merksapi',name :'merksapi'},
                        {data:'keterangan', name: 'keterangan'},
                        {data:'bobot',name:'bobot'},
                        {data:'susu',name:'susu'},
                        {data:'umur',name:'umur'},
                        {data:'konsumsi',name:'konsumsi'},
                        {data:'Price_rupiah',name:'Price_rupiah'},
                        {data:'aksi',name: 'aksi',searchable:false,orderable: false}                        
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush