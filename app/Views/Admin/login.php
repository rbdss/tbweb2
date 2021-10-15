<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>
                                <?php if (session()->getFlashdata('error')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('error'); ?>
                                    </div>
                                <?php endif; ?>
                                <form class="user" method="POST" action="/admin/masuk">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukan Username">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('username'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Password">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>

                                </form>


                                <div class="text-center">
                                    <a class="small" href="/admin/signup">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection(); ?>