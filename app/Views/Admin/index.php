<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('konten'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/Asset/Img/profile-icon.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $_SESSION['nama']; ?></h5>
                    <p class="card-text"><?= $_SESSION['username']; ?></p>
                    <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>