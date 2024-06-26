<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <?php if (session()->getFlashdata('error')) : ?>
                                    <p style="color:red;"><?= session()->getFlashdata('error') ?></p>
                                <?php endif; ?>
                                <form class="user" method="post" action="<?= base_url('auth/process') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="nik" id="nik" required placeholder="Masukkan id Pegawai..">
                                    </div>

                                    <!-- <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div> -->
                                    <hr>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>

                                </form>

                                <!-- <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>/register">Create an Account!</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection('content'); ?>