<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">

    <div class="col-lg-6 mx-auto">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                            </div>
                            <form class="user" method="POST" action="/admin/daftar">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="Nama" value="<?= old('nama'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" placeholder="Username" value="<?= old('username'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('username'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Password" value="<?= old('password'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user <?= ($validation->hasError('password2')) ? 'is-invalid' : ''; ?>" id="password2" name="password2" placeholder="Repeat Password" value="<?= old('password2'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password2'); ?>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/admin">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>