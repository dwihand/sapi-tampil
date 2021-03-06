@extends('layouts.admin')
@section('title')
    Matrix Normalisasi | Sitem Rekomendasi Laptop
@endsection
@section('content')
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Matrix Normalisasi</b></h4>
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
                    ajax: '{!! route('admin.saw.matrix_normalisasi') !!}',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'merksapi', name: 'merksapi'},
                        {data:'keterangan', name: 'keterangan'},
                        {data:'n_susu',name:'n_susu'},
                        {data:'n_konsumsi',name:'n_konsumsi'},
                        {data:'n_umur',name:'n_umur'},
                        {data:'n_bobot',name:'n_bobot'},
                        {data:'n_price',name:'n_price'}                        
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush