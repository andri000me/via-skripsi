<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?=base_url('admin');?>">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('admin/pengguna');?>">Pengguna</a></li>
                        <li class="breadcrumb-item active">Edit Pengguna</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Edit Pengguna</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- Form row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?=base_url('proses/edit_kontraktor');?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="namaLengkap" class="col-form-label">Nama Lengkap</label>
                                <input type="hidden" class="form-control" name="id_kontraktor"
                                    value="<?=$kontraktorById['id_kontraktor'];?>">
                                <input type="text" class="form-control" id="namaLengkap" name="nama_kontraktor"
                                    value="<?=$kontraktorById['nama_kontraktor'];?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="no_hp" class="col-form-label">No. HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp"
                                    value="<?=$kontraktorById['no_hp'];?>">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="alamat" class="col-form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="<?=$kontraktorById['alamat'];?>">
                            </div>
                        </div>

                        <a href="<?=base_url('admin/kontraktor');?>" class="btn btn-primary float-left"><i
                                class="mdi mdi-undo"></i> Kembali </a>
                        <button type="submit" class="btn btn-success float-right"><i class="mdi mdi-floppy"></i> Simpan
                        </button>

                    </form>

                </div> <!-- end card-body -->
            </div>
            <!-- e
nd card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->