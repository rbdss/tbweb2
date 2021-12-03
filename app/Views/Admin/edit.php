<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('konten') ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Data</h1>
    <form action="/admin/update/<?= $konten['id']; ?>" method="POST" enctype="multipart/form-data" class="col-12">
        <input type="hidden" name="oldPhoto" value="<?= $konten['foto']; ?>">
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <div class="mb-3">
                <input class="form-control" type="file" id="foto" name="foto">
            </div>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= (old('nama')) ? old('nama') : $konten['nama']; ?>">
        </div>
        <div class="mb-3">
            <label for="info" class="form-label">Informasi</label>
            <input type="text" class="form-control" id="info" name="info" value="<?= $konten['info_diri']; ?>">
        </div>
        <div class="mb-3">
            <label for="detail1" class="form-label">Detail 1</label>
            <textarea class="form-control" id="detail1" name="detail1" rows="2"><?= $konten['about']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="detail1" class="form-label">Detail 2</label>
            <textarea class="form-control" id="detail2" name="detail2" rows="2"><?= $konten['about2']; ?></textarea>
        </div>
        <a href="/admin/portofolio" class="btn btn-danger">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection(); ?>