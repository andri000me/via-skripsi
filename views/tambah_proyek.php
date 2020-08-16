<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?=base_url('admin');?>">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('admin/data_proyek');?>">Proyek</a></li>
                        <li class="breadcrumb-item active">Tambah Proyek</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Tambah Proyek</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- Form row -->
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <form action="<?=base_url('proses/tambah_proyek');?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="namaProyek" class="col-form-label">Nama Proyek</label>
                                <input type="text" class="form-control" id="nama_proyek" name="nama"
                                    placeholder="Masukkan nama proyek">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nomor" class="col-form-label">Nomor Proyek</label>
                                <input type="text" class="form-control" id="nomor_proyek" name="nomor_proyek"
                                    placeholder="Masukkan nomor proyek">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="namaProyek" class="col-form-label">Tanggal Kontrak</label>
                                <input type="text" class="form-control date" data-toggle="date-picker"
                                    data-single-date-picker="true" name="tanggal_proyek">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nomor" class="col-form-label">PHO</label>
                                <input type="text" class="form-control date" data-toggle="date-picker"
                                    data-single-date-picker="true" data-format="yyyy-mm-dd" name="target_proyek">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="namaProyek" class="col-form-label">Nilai Kontrak</label>
                                <input type="number" class="form-control" id="budget" name="budget"
                                    placeholder="Masukkan budget proyek">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nomor" class="col-form-label">Rencana (%)</label>
                                <input type="number" class="form-control" id="progress" name="rencana"
                                    placeholder="Ex: 45" max="100">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nomor" class="col-form-label">Realisasi (%)</label>
                                <input type="number" class="form-control" id="progress" name="realisasi"
                                    placeholder="Ex: 65" max="100">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nomor" class="col-form-label">Deviasi (%)</label>
                                <input type="number" class="form-control" id="progress" name="deviasi"
                                    placeholder="Ex: 75" max="100">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputState" class="col-form-label">Satker</label>
                                <select name="satker" id="inputState" class="form-control">
                                    <?php foreach($satkers as $satker):?>
                                    <option value="<?= $satker['id_user'];?>"><?= $satker['nama'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="col-form-label">Kontraktor</label>
                                <select name="kontraktor" id="inputState" class="form-control">
                                    <?php foreach($kontraktor as $k):?>
                                    <option value="<?= $k['id_kontraktor'];?>"><?= $k['nama_kontraktor'];?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                        </div>


                        <a href="<?=base_url('admin/data_proyek');?>" class="btn btn-primary float-left"><i
                                class="mdi mdi-undo"></i> Kembali </a>
                        <button type="submit" class="btn btn-success float-right"><i class="mdi mdi-floppy"></i> Simpan
                        </button>

                    </form>


                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->