<?php view('static/header')?>

<div class="account-pages my-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="text-center">
                    <a href="index.html">
                        <img src="<?= assets('images/logo-dark.png') ?>" alt="" height="22" class="mx-auto">
                    </a>
                    <p class="text-muted mt-2 mb-4"><b>TODO</b>APP</p>

                </div>
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <h4 class="text-uppercase mt-0"><?= lang('Oturum Açın')?></h4>
                        </div>
                        <form action="<?= URL.'/tr/login'?>" method="post">
                            <?= get_session('hata2'); ?>
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label"><?= lang('Email adresi')?></label>
                                <input class="form-control" type="email" name="emailadress" id="emailaddress" required="" placeholder="<?= lang('Email adresi')?>">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label"><?= lang('Şifre')?></label>
                                <input class="form-control" type="password" name="password" required="" id="password" placeholder="<?= lang('Şifre')?>">
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                    <label class="form-check-label" for="checkbox-signin"><?= lang('Beni hatırla')?></label>
                                </div>
                            </div>

                            <div class="mb-3 d-grid text-center">
                                <button class="btn btn-primary"  name="submit" type="submit"> <?= lang('Giriş Yap')?> </button>
                            </div>
                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p> <a href="pages-recoverpw.html" class="text-muted ms-1"><i class="fa fa-lock me-1"></i><?= lang('Şifrenizi mi unuttunuz?')?></a></p>
                        <p class="text-muted"><?= lang('Hesabınız yok mu?')?> <a href="pages-register.html" class="text-dark ms-1"><b><?= lang('Kayıt Ol')?></b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<script src="<?= assets('libs/jquery/jquery.min.js') ?>"></script>
<script src="<?= assets('libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= assets('libs/simplebar/simplebar.min.js') ?>"></script>
<script src="<?= assets('libs/node-waves/waves.min.js') ?>"></script>
<script src="<?= assets('libs/waypoints/lib/jquery.waypoints.min.js') ?>"></script>
<script src="<?= assets('libs/jquery.counterup/jquery.counterup.min.js') ?>"></script>
<script src="<?= assets('libs/feather-icons/feather.min.js') ?>"></script>

<!-- App js -->
<script src="<?= assets('js/app.min.js') ?>"></script>

</body>
</html>