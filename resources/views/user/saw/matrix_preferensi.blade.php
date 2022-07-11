@extends('layouts.user')
@section('title')
    Matrix Preferensi | Sitem Pendukung Pembelian Sapi
@endsection
@section('content')
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Matrix Preferensi</b></h4>
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
                    <th>Total</th>                                          
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
                    ajax: '{!! route('admin.saw.matrix_preferensi') !!}',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'merksapi', name: 'merksapi'},
                        {data:'keterangan', name: 'keterangan'},
                        {data:'b_susu',name:'b_susu'},
                        {data:'b_konsumsi',name:'b_konsumsi'},
                        {data:'b_umur',name:'b_umur'},
                        {data:'b_bobot',name:'b_bobot'},
                        {data:'b_price',name:'b_price'},
                        {data:'nilai_preferensi',name:'nilai_preferensi'}                         
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush