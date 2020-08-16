<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?=base_url('admin');?>">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('admin/kontraktor');?>">Kontraktor</a></li>
                        <li class="breadcrumb-item active">Tambah Kontraktor</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Tambah Kontraktor</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- Form row -->
    <div class="row">
        <div class="col-12">
            <?php if($this->session->flashdata('error')):?>
            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?= $this->session->flashdata('error');?>
            </div>
            <?php endif;?>
            <div class="card">
                <div class="card-body">
                    <form action="<?=base_url('proses/tambah_kontraktor');?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="namaLengkap" class="col-form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namaLengkap" name="nama_kontraktor"
                                    placeholder="Masukkan nama lengkap">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="no_hp" class="col-form-label">No. HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp"
                                    placeholder="Masukkan nomor handphone">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="alamat" class="col-form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="Masukkan alamat lengkap">
                            </div>
                        </div>

                        <a href="<?=base_url('admin/kontraktor');?>" class="btn btn-primary float-left"><i
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