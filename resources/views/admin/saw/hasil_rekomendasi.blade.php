@extends('layouts.admin')
@section('title')
    Hasil Rekomendasi | Sitem Pendukung Keputusan Pembelian Sapi
@endsection
@section('content')
<br>
@include('admin.sapi.lihat-sapi')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Hasil Rekomendasi</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-mahasiswa" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Merk Sapi</th>
                    <th>Keterangan</th>
                    <th>Bobot Badan</th>
                    <th>Susu dalam Liter</th>
                    <th>Umur Sapi</th>
                    <th>Konsumsi Pakan</th>
                    <th>Prices</th>
                    <th>Nilai Preferensi</th>
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
            function lihatSapi(trigerer){
                    var tr = $(trigerer).parent().parent();
                    var modal = $(trigerer).data("target");
                    // $(modal + " #company").html($("#table-mahasiswa").DataTable().row(tr).data().Company);
                    $(modal + " #merksapi").html($("#table-mahasiswa").DataTable().row(tr).data().merksapi);
                    // $(modal + " #product").html($("#table-mahasiswa").DataTable().row(tr).data().Product);
                    $(modal + " #keterangan").html($("#table-mahasiswa").DataTable().row(tr).data().keterangan);
                    $(modal + " #typename").html("Type Name: " + $("#table-mahasiswa").DataTable().row(tr).data().TypeName);
                    // $(modal + " #Inches").html("Inches: "+$("#table-mahasiswa").DataTable().row(tr).data().Inches);
                    $(modal + " #susu").html("Susu: "+$("#table-mahasiswa").DataTable().row(tr).data().susu);
                    // $(modal + " #screenresolution").html("Screen Resolution: "+$("#table-mahasiswa").DataTable().row(tr).data().ScreenResolution);
                    $(modal + " #bobot").html("Bobot Badan: "+$("#table-mahasiswa").DataTable().row(tr).data().bobot);
                    $(modal + " #cpu").html("Cpu: "+$("#table-mahasiswa").DataTable().row(tr).data().Cpu);
                    // $(modal + " #ram").html("Ram: "+$("#table-mahasiswa").DataTable().row(tr).data().Ram);
                    $(modal + " #umur").html("Umur: "+$("#table-mahasiswa").DataTable().row(tr).data().umur);
                    $(modal + " #memory").html("Memory: "+$("#table-mahasiswa").DataTable().row(tr).data().Memory);
                    $(modal + " #gpu").html("GPU: "+ $("#table-mahasiswa").DataTable().row(tr).data().Gpu);
                    $(modal + " #opsys").html("Operating System: "+$("#table-mahasiswa").DataTable().row(tr).data().OpSys);
                    //$(modal + " #weight").html("Weight: "+$("#table-mahasiswa").DataTable().row(tr).data().Weight);
                    $(modal + " #konsumsi").html("Konsumsi: "+$("#table-mahasiswa").DataTable().row(tr).data().konsumsi);
                    $(modal + " #price").html("Prices: "+$("#table-mahasiswa").DataTable().row(tr).data().Price_rupiah);
                }
            $(document).ready(function() {
                $("#table-mahasiswa").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('admin.saw.matrix_preferensi') !!}',
                    order:[8,'desc'],
                    columns:[
                        {data:'id', name: 'id',orderable: false,visible:false},
                        // {data:'Company',name :'Company',orderable: false},
                        {data:'merksapi',name :'merksapi',orderable: false},
                        // {data:'Product', name: 'Product',orderable: false},
                        {data:'keterangan', name: 'keterangan',orderable: false},
                        // {data:'ScreenResolution',name:'ScreenResolution',orderable: false},
                        {data:'bobot',name:'bobot',orderable: false},
                        // {data:'Inches',name:'Inches',orderable: false},
                        {data:'susu',name:'susu',orderable: false},
                        // {data:'Ram',name:'Ram',orderable: false},
                        {data:'umur',name:'umur',orderable: false},
                        {data:'Weight',name:'Weight',orderable: false},
                        //{data:'konsumsi',name:'konsumsi',orderable: false},
                        {data:'Price_rupiah',name:'Price_rupiah',orderable: false},
                        {data:'nilai_preferensi',name:'nilai_preferensi'},
                        {data:'aksi',name: 'aksi',searchable:false,orderable: false}                       
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush