<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('konten') ?>
<div class="container-fluid">
    <img src="/Asset/Img/<?= $konten['foto']; ?>" class="img-fluid" width="150px">
    <table class="table">
        <tbody>
            <tr>
                <td>Nama</td>
                <td><?= $konten['nama']; ?></td>
            </tr>
            <tr>
                <td>Informasi</td>
                <td><?= $konten['info_diri']; ?></td>
            </tr>
            <tr>
                <td>Detail 1</td>
                <td><?= $konten['about']; ?></td>
            </tr>
            <tr>
                <td>Detail 2</td>
                <td><?= $konten['about2']; ?></td>
            </tr>
        </tbody>
    </table>
    <a href="/admin/portfolio/<?= $konten['id']; ?>" type="button" class="btn btn-warning">Edit</a>

</div>
<?= $this->endSection(); ?>