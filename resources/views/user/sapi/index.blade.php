@extends('layouts.user')
@section('title')
    Data Sapi | Sitem Pendukung Keputusan Pembelian Sapi
@endsection
@section('content')
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Daftar Sapi</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>
            @include('admin.sapi.lihat-sapi')
            <table id="table-sapi" class="table table-bordered">
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
                    $(modal + " #merksapi").html($("#table-sapi").DataTable().row(tr).data().merksapi);
                    $(modal + " #keterangan").html($("#table-sapi").DataTable().row(tr).data().keterangan);
                    $(modal + " #susu").html("Susu: "+$("#table-sapi").DataTable().row(tr).data().susu);
                    $(modal + " #bobot").html("Bobot Badan: "+$("#table-sapi").DataTable().row(tr).data().bobot);
                    $(modal + " #umur").html("umur"+$("#table-sapi").DataTable().row(tr).data().umur);
                    $(modal + " #konsumsi").html("konsumsi"+$("#table-sapi").DataTable().row(tr).data().konsumsi);
                    $(modal + " #price").html("Prices"+$("#table-sapi").DataTable().row(tr).data().Price_rupiah);
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
                $("#table-sapi").DataTable({
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
                        {data:'Price_rupiah',name:'Price_rupiah'}
                    ]
                });
            } );

        </script>
        @include("user.script.form-modal-ajax")
@endpush