<div class="button-list" data-id="{{$id}}" data-table-target="table-mahasiswa">
    <button type="button" class="btn btn-icon waves-effect waves-light btn-primary" data-toggle="modal" data-target="#lihat-sapi" data-id="{{$id}}" onclick="lihatSapi(this);"><i class="fa fa-eye"></i></button>
    <button data-url="{{route('admin.sapi.delete')}}" class="btn btn-icon waves-effect waves-light btn-danger" onclick="hapusData(this);"> <i class="fa fa-remove"></i> </button>
</div>