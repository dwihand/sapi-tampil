<!-- Signup modal content -->
<div id="tambah-mahasiswa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <h2 class=" text-center m-b-30">
                    Tambah Sapi Baru
                </h2>

                <form id="tambah-mahasiswa" data-table-target="table-mahasiswa"  class="form-horizontal" action="{{route('admin.sapi.add')}}" method="POST">
                <fieldset id="fieldset">
                    <div class="form-group m-b-25">
                        <div class="col-12" id="message">
                            
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="username">Merk Sapi</label>
                            <input class="form-control" name="merksapi" type="text" id="name" required placeholder="merksapi">
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Keterangan</label>
                            <input class="form-control" name="keterangan" type="text" id="email" required placeholder="keterangan">
                        </div>
                    </div>
                     
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Penghasilan Susu </label>
                            <input class="form-control" name="susu" type="text" id="email" required placeholder="susu">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                            <div class="col-12">
                                <label for="emailaddress">Bobot Badan</label>
                                <input class="form-control" name="bobot" type="text" id="email" required placeholder="bobot">
                            </div>
                    </div>
                    
                    
                    <div class="form-group m-b-25">
                            <div class="col-12">
                                <label for="emailaddress">Umur Sapi</label>
                                <input class="form-control" name="umur" type="text" id="email" required placeholder="umur">
                            </div>
                    </div>
                    
                    
                    
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Konsumsi Pakan</label>
                            <input class="form-control" name="konsumsi" type="text" id="email" required placeholder="konsumsi">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Prices </label>
                            <input class="form-control" name="prices" type="text" id="email" required placeholder="prices">
                        </div>
                    </div>
                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-12">
                            <button class="btn w-lg btn-rounded btn-primary waves-effect waves-light" type="submit">Tambah</button>
                        </div>
                    </div>
                </fieldset>
                </form>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->