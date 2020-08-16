<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/hyper/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Aug 2018 21:48:45 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Login | e-Monitoring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url();?>assets/images/pu.png">

    <!-- App css -->
    <link href="<?= base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url();?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body >

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5" style="background-image: url(<?=base_url();?>assets/images/gambar.jpg);background-repeat:no-repeat;background-size: contain;"></div>
                <div class="col-lg-5 mt-5">
                    <?php if($this->session->flashdata('error')):?>
                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?= $this->session->flashdata('error');?>
                    </div>
                <?php endif;?>
                    <div class="card">

                        <!-- Logo -->
                        <!-- <div class="card-header pt-4 pb-4 text-center bg-primary">
                            <a href="index.html">
                                <span><img src="<?= base_url();?>assets/images/pu.png" alt="" height="18"></span>
                            </a>
                        </div> -->

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto" style="color:black;">
                                <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Login</h4>
                                <p class="text-muted mb-4">Silahkan masukkan Username dan Password anda di bawah !
                                </p>
                            </div>

                            <form action="<?= base_url('login/proses');?>" method="post">

                                <div class="form-group">
                                    <label for="username" style="color:black;">Username</label>
                                    <input class="form-control" type="text" name="username" id="username" required=""
                                        placeholder="Masukkan username anda">
                                </div>

                                <div class="form-group">
                                    <!-- <a href="pages-recoverpw.html" class="text-muted float-right"><small>Forgot your
                                            password?</small></a> -->
                                    <label for="password" style="color:black;">Password</label>
                                    <input class="form-control" type="password" name="password" required=""
                                        id="password" placeholder="Masukkan password anda">
                                </div>

                                <!-- <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin"
                                            checked>
                                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div> -->

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary" type="submit"> Log In </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <!-- <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Don't have an account? <a href="<?=base_url('welcome/register'); ?>"
                                    class="text-dark ml-1"><b>Sign Up</b></a></p>
                        </div>
                    </div> -->
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        2020 &copy e-Monitoring
    </footer>

    <!-- App js -->
    <script src="<?= base_url();?>assets/js/app.min.js"></script>
</body>

<!-- Mirrored from coderthemes.com/hyper/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Aug 2018 21:48:45 GMT -->

</html>
