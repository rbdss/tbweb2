<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('konten') ?>
<div class="container-fluid">
    <a href="" class="btn btn-info mb-4">Export</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Pesan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pesan as $p) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $p['nama']; ?></td>
                    <td><?= $p['email']; ?></td>
                    <td><?= $p['pesan']; ?></td>
                    <td>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>