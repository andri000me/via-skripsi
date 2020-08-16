<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?=base_url('admin');?>">Beranda</a></li>

                        <li class="breadcrumb-item active">Kontraktor</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Kontraktor</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row mb-2">
        <div class="col-sm-4">
            <a href="<?= base_url('admin/tambah_kontraktor');?>" class="btn btn-danger btn-rounded mb-3"><i
                    class="mdi mdi-plus"></i> Tambah
                Kontraktor</a>
        </div>
        <div class="col-sm-8">
            <div class="text-sm-right">
            </div>
        </div><!-- end col-->
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
                                <th>Nama Kontraktor</th>
                                <th>No. HP</th>
                                <th>Alamat</th>
                                <th width="100">Aksi</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php $n=1; foreach($users as $user):?>
                            <tr>
                                <td><?php echo $n++;?></td>
                                <td><?php echo $user['nama_kontraktor'];?></td>
                                <td><?php echo $user['no_hp'];?></td>
                                <td><?php echo $user['alamat'];?></td>
                                <td>
                                    <a href="<?= base_url('admin/edit_kontraktor/');?><?php echo $user['id_kontraktor'];?>"
                                        class="btn btn-icon btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Edit"> <i class="mdi mdi-account-edit"></i> </a>
                                    <a href="<?= base_url('proses/hapus_kontraktor/');?><?php echo $user['id_kontraktor'];?>"
                                        class="btn btn-icon btn-danger btn-sm" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Hapus"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');"> <i
                                            class="mdi mdi-account-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach;?>

                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->







</div> <!-- container -->
