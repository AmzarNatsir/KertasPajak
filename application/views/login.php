<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - App Pajak</title>
        <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="<?php echo base_url();?>login/do_login" method="post">
                                            <?php if ($this->session->flashdata('konfirm')): ?>
                                            <div class="alert alert-info alert-dismissible" id="success-alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <h4><i class="icon fa fa-info"></i> Konfirmasi !</h4>
                                                <?php echo $this->session->flashdata('konfirm'); ?>
                                            </div>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inp_username">Email</label>
                                                <input class="form-control py-4" id="inp_username" name="inp_username" type="text" placeholder="Nama Pengguna" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inp_passwd">Password</label>
                                                <input class="form-control py-4" id="inp_passwd" name="inp_passwd" type="password" placeholder="Masukkan password" />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function() 
    {
        window.setTimeout(function () { $("#success-alert").alert('close'); }, 2000);
    });
</script>
