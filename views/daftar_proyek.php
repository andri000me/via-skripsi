<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?=base_url('admin');?>">Beranda</a></li>
                        
                        <li class="breadcrumb-item active">Proyek</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Proyek</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row mb-2"> 
        <?php if($this->session->tipe=='administrator'):?>
        <div class="col-sm-4">
            <a href="<?= base_url('admin/tambah_data_proyek');?>" class="btn btn-danger btn-rounded mb-3"><i
                    class="mdi mdi-plus"></i> Buat
                Proyek</a>
        </div>
        <div class="col-sm-8">
            <div class="text-sm-right">
                <div class="btn-group mb-3">
                    <a href="<?=base_url('admin/data_proyek');?>" class="btn btn-primary">Semua</a>
                </div>
                <div class="btn-group mb-3 ml-1">
                    <a href="<?=base_url('admin/data_proyek_proses');?>" class="btn btn-light">Proses</a>
                    <a href="<?=base_url('admin/data_proyek_selesai');?>" class="btn btn-light">Selesai</a>
                </div>
                <!-- <div class="btn-group mb-3 ml-2 d-none d-sm-inline-block">
                    <button type="button" class="btn btn-dark"><i class="dripicons-view-apps"></i></button>
                </div>
                <div class="btn-group mb-3 d-none d-sm-inline-block">
                    <button type="button" class="btn btn-link text-dark"><i class="dripicons-checklist"></i></button>
                </div> -->
            </div>
        </div>
        <?php  endif; ?>
        <!-- end col-->
    </div>
    <!-- end row-->

    <div class="row">

        <div class="col-12">
            <?php if($this->session->flashdata('success')):?>
            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?= $this->session->flashdata('success');?>
            </div>
        <?php endif;?>
            <div class="card">
                <div class="card-body">

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th width="20">No</th>
                                <th>Nama Proyek</th>
                                <th>Nomor Proyek</th>
                                <th></th>
                                <?php if($this->session->tipe=='administrator'):?>
                                <th>Tindakan</th>
                               <?php endif; ?>
                            </tr>
                        </thead>


                        <tbody>

                            <?php $n=1; foreach($data_proyek as $proyek):?>
                            <tr>
                                <td><?php echo $n++;?></td>
                                <td><a href="<?= base_url('admin/detail_proyek/');?><?php echo $proyek['id_proyek'];?>"><?php echo $proyek['nama_proyek'];?></a></td>
                                <td><?php echo $proyek['nomor_proyek'];?></td>
                                <td>
                                    <!-- project progress-->
                                    <p class="mb-2 font-weight-bold">Progress <span class="float-right"><?=number_format($proyek['progress'],0,'.',',');?>%</span></p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?=$proyek['progress'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$proyek['progress'];?>%;">
                                        </div><!-- /.progress-bar -->
                                    </div><!-- /.progress -->
                                </td>
                                <?php if($this->session->tipe=='administrator'):?>
                                <td>
                                    <a href="<?= base_url('admin/edit_proyek/');?><?php echo $proyek['id_proyek'];?>" class="btn btn-icon btn-info btn-sm" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"> <i
                                            class="mdi mdi-account-edit"></i> </a>
                                    <a href="<?= base_url('proses/hapus_proyek/');?><?php echo $proyek['id_proyek'];?>" class="btn btn-icon btn-danger btn-sm" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');"> <i
                                            class="mdi mdi-account-remove"></i>
                                    </a>
                                </td>
                            <?php endif; ?>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->

    
                    </li>
                </ul>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row-->



</div> <!-- container -->