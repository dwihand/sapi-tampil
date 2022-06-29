@extends('layouts.admin')
@section('title')
    Matrix Nilai | Sitem Pendukung Keputusan Pembelian Sapi
@endsection
@section('content')
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Matrix Nilai</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-mahasiswa" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Merk Sapi</th>
                    <th>Keterangan</th>
                    <th>Penghasilan Susu (C1)</th>
                    <th>Konsumsi Pakan (C2)</th>
                    <th>Umur Sapi (C3)</th>
                    <th>Bobot Badan (C4)</th>
                    <th>Price (C5)</th>                                          
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
                    ajax: '{!! route('admin.saw.matrix_nilai') !!}',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        // {data:'Company',name :'Company'},
                        {data:'merksapi',name :'merksapi'},
                        // {data:'Product', name: 'Product'},
                        {data:'keterangan', name: 'keterangan'},
                        // {data:'l_inches',name:'l_inches'},
                        {data:'l_susu',name:'l_susu'},
                        //{data:'l_weight',name:'l_weight'},
                        {data:'l_konsumsi',name:'l_konsumsi'},
                        // {data:'l_ram',name:'l_ram'},
                        {data:'l_umur',name:'l_umur'},
                        // {data:'l_screenresolution',name:'l_screenresolution'},
                        {data:'l_bobot',name:'l_bobot'},
                        {data:'l_price',name:'l_price'}                        
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush