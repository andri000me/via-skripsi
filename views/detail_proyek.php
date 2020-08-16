                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?=base_url('admin');?>">Beranda</a>
                                            </li>
                                            <li class="breadcrumb-item"><a
                                                    href="<?=base_url('admin/data_proyek');?>">Proyek</a></li>
                                            <li class="breadcrumb-item active">Detail proyek</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Detail Proyek</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <?php if($this->session->flashdata('success')):?>
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                            role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?= $this->session->flashdata('success');?>
                        </div>
                        <?php endif;?>
                        <?php if($this->session->flashdata('error')):?>
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?= $this->session->flashdata('error');?>
                        </div>
                        <?php endif;?>
                        <div class="row">
                            <div class="col-md-8">
                                <!-- project card -->
                                <div class="card d-block">
                                    <div class="card-body">
                                        <!-- project title-->
                                        <h3 class="mt-0">
                                            <?= $proyekById['nama_proyek'];?>
                                        </h3>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-4">
                                                    <h5>Tanggal Kontrak</h5>
                                                    <p><?= date('d F Y', strtotime($proyekById['tanggal_proyek']));?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-4">
                                                    <h5>PHO</h5>
                                                    <p><?=  date('d F Y', strtotime($proyekById['target_proyek']));?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-4">
                                                    <h5>Nilai Kontrak</h5>
                                                    <p><?= 'Rp. '.number_format($proyekById['budget'],2,',','.');?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5>Penanggung Jawab</h5>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Penanggung Jawab"
                                                    class="d-inline-block">
                                                    <h4><?= $proyekById['nama'];?></h4>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>Kontraktor</h5>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Kontraktor" class="d-inline-block">
                                                    <h4><?= $proyekById['nama_kontraktor'];?></h4>
                                                </a>
                                            </div>
                                        </div>

                                    </div> <!-- end card-body-->

                                </div> <!-- end card-->


                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Files</h5>
                                        <div class="row">
                                            <?php foreach($list_file as $lf):?>
                                            <div class="col-md-6">
                                                <div class="card mb-1 shadow-none border border-light">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <?php if(pathinfo($lf['nama_file'], PATHINFO_EXTENSION)!='pdf'):?>
                                                                <img src="<?=base_url();?>uploads/<?=$lf['nama_file'];?>"
                                                                    class="avatar-sm rounded" alt="file-image" />
                                                                <?php else:?>
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title rounded">
                                                                        .PDF
                                                                    </span>
                                                                </div>
                                                                <?php endif;?>
                                                            </div>
                                                            <div class="col pl-0">
                                                                <a href="javascript:void(0);"
                                                                    class="text-muted font-weight-bold"><?= substr($lf['nama_file'],0,15);?></a>
                                                                <p class="mb-0">
                                                                    <?=$lf['file_size']?$lf['file_size'].' KB':'0'.' KB';?>
                                                                </p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <!-- Button -->
                                                                <a href="<?=base_url();?>uploads/<?=$lf['nama_file'];?>"
                                                                    class="btn btn-link btn-lg text-muted"
                                                                    target="_blank">
                                                                    <i class="dripicons-download"></i>
                                                                </a>

                                                                <?php if($this->session->tipe=='satker'):?>
                                                                <a href="<?=base_url('proses/delete_file/').$lf['id_file'];?>"
                                                                    class="btn btn-link text-muted"
                                                                    onclick="return confirm('Anda yakin ingin menghapus file ini ?');">
                                                                    <i class="dripicons-cross"></i>
                                                                </a>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach;?>
                                        </div>


                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Total Progress</h5>
                                        <div class="mt-3">
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar"
                                                    aria-valuenow="<?= $proyekById['total_progress'];?>"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    style="width: <?= $proyekById['total_progress'];?>%;">
                                                </div><!-- /.progress-bar -->
                                            </div><!-- /.progress -->
                                            <h1><?= number_format($proyekById['total_progress'],0,'.',',');?>%</h1>
                                        </div>
                                        <hr style="border-top:1px solid #0000ff;">
                                        <h5 class="card-title mb-3">Rencana</h5>
                                        <div class="mt-3">
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar"
                                                    aria-valuenow="<?= $proyekById['rencana'];?>" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: <?= $proyekById['rencana'];?>%;">
                                                </div><!-- /.progress-bar -->
                                            </div><!-- /.progress -->
                                            <h5><?= number_format($proyekById['rencana'],0,'.',',');?>%</h5>
                                        </div>


                                        <h5 class="card-title mb-3">Realisasi</h5>
                                        <div class="mt-3">
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar"
                                                    aria-valuenow="<?= $proyekById['realisasi'];?>" aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    style="width: <?= $proyekById['realisasi'];?>%;">
                                                </div><!-- /.progress-bar -->
                                            </div><!-- /.progress -->
                                            <h5><?= number_format($proyekById['realisasi'],0,'.',',');?>%</h5>
                                        </div>


                                        <h5 class="card-title mb-3">Deviasi</h5>
                                        <div class="mt-3">
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar"
                                                    aria-valuenow="<?= $proyekById['deviasi'];?>" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: <?= $proyekById['deviasi'];?>%;">
                                                </div><!-- /.progress-bar -->
                                            </div><!-- /.progress -->
                                            <h5><?= number_format($proyekById['deviasi'],0,'.',',');?>%</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-->
                                <?php if($this->session->tipe=='satker'):?>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Jumlah Progress</h5>
                                        <div class="mt-3">
                                            <form action="<?=base_url('proses/ubah_progress');?>" method="post">
                                                <div class="mb-2">
                                                    <input type="hidden" name="id_detail"
                                                        value="<?= $proyekById['id_detail'];?>">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">Rencana :
                                                                <?= $proyekById['rencana'];?>%</div>
                                                        </div>
                                                        <input type="number" class="form-control" name="rencana" min="0"
                                                            max="100">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">%</div>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">Realisasi :
                                                                <?= $proyekById['realisasi'];?>%</div>
                                                        </div>
                                                        <input type="number" class="form-control" name="realisasi"
                                                            min="0" max="100">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">%</div>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">Deviasi :
                                                                <?= $proyekById['deviasi'];?>%</div>
                                                        </div>
                                                        <input type="number" class="form-control" name="deviasi" min="0"
                                                            max="100">
                                                        <div class="input-group-prepend">

                                                            <div class="input-group-text">%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary float-right"><i
                                                        class="mdi mdi-floppy"></i> Ubah</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <!-- end card-->
                                <?php if($this->session->tipe=='satker'):?>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Unggah Dokumentasi</h5>
                                        <div class="mt-3">
                                            <form action="<?=base_url('proses/upload_dokumentasi');?>" method="post"
                                                enctype="multipart/form-data">
                                                <div class="mb-2">
                                                    <input type="hidden" name="id_proyek"
                                                        value="<?= $proyekById['id_proyek'];?>">
                                                    <input type="file" class="form-control" name="file_dokumentasi">
                                                </div>
                                                <button type="submit" class="btn btn-primary float-right"><i
                                                        class="mdi mdi-upload"></i> Unggah</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-->
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->