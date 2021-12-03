<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('konten') ?>
<div class="container-fluid">
    <a href="/admin/export" class="btn btn-primary mb-4">Export</a>

    <table class="table table-striped" id="tabelPesan">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Pesan</th>
                <!-- <th scope="col">Aksi</th> -->
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
                    <!-- <td>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </td> -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Datatable script -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#tabelPesan').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'colvis']
        });

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
</script> -->

<?= $this->endSection(); ?>