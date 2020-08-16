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
                    <form action="<?=base_url('proses/edit_pengguna');?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="namaLengkap" class="col-form-label">Nama Lengkap</label>
                                <input type="hidden" class="form-control" name="id_user"
                                    value="<?=$userById['id_user'];?>">
                                <input type="text" class="form-control" id="namaProyek" name="nama"
                                    placeholder="Masukkan nama lengkap" value="<?=$userById['nama'];?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nomor" class="col-form-label">Username</label>
                                <input type="text" class="form-control" id="nomor" name="username"
                                    placeholder="Masukkan username" value="<?=$userById['username'];?>" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword" class="col-form-label">Password</label>
                                <input type="hidden" class="form-control" name="password_lama"
                                    value="<?=$userById['password'];?>">
                                <input type="password" class="form-control" id="inputPassword" name="password"
                                    placeholder="Masukkan Password Baru">
                                <span class="text-danger" style="font-size:12px;">* Biarkan kosong jika tidak ingin
                                    mengubah password</span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState" class="col-form-label">Tipe</label>
                                <select id="inputState" class="form-control" name="tipe">
                                    <option value="administrator"
                                        <?=$userById['tipe']=="administrator"?'selected':'';?>>Administrator</option>
                                    <option value="satker" <?=$userById['tipe']=="satker"?'selected':'';?>>Satuan Kerja
                                    </option>
                                </select>
                            </div>
                        </div>

                        <a href="<?=base_url('admin/pengguna');?>" class="btn btn-primary float-left"><i
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