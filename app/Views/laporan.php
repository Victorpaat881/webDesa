<?= $this->extend('layout/__layout'); ?>

<?= $this->section('content'); ?>
<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <?php if (user()->username == 'superuser') : ?>
                                <th style="width: 20px;">Delete</th>
                            <?php endif ?>
                            <th style="width: 20px;">Act</th>
                            <th style="width: 20px;">ID</th>
                            <th>Name</th>
                            <th>Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($file_uploaded as $key => $file) : ?>
                            <tr>
                                <?php if (user()->username == 'superuser') : ?>
                                    <td style="background-color:red;"><a href="<?= base_url('admin/delete_laporan') . '?filelocation=' . $file['file_location'] ?>" style="color:white; font-weight:bold">Delete</a></td>
                                <?php endif ?>
                                <td style="background-color:blue;"><a href="<?= base_url() . $file['file_location'] ?>" target="_blank" style="color:white; font-weight:bold">Download</a></td>
                                <td><?= ++$key ?></td>
                                <td><?= $file['name'] ?></td>
                                <td><?= $file['size'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="text-box padding-4 border">
                    <div class="smart-forms smart-container wrap-3">
                        <h4 class="uppercase">File Upload Form</h4>
                        <?php if (session()->getFlashdata('success')) : ?>
                            <div style="color: green;">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php elseif (session()->getFlashdata('error')) : ?>
                            <div style="color: red;">
                                <?php if (session()->getFlashdata('error')) : ?>
                                    <?php foreach (session()->getFlashdata('error') as $error) : ?>
                                        <span><?= $error ?></span>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?= base_url('admin/upload_laporan') ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                            <div class="spacer-t30 spacer-b30">
                                <div class="tagline"><span> File Upload </span></div><!-- .tagline -->
                            </div>

                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="file" name="laporan" id="laporan" class="gui-input" placeholder="Enter file">
                                    <span class="field-icon"><i class="fa fa-dashboard"></i></span>
                                </label>
                            </div><!-- end section -->
                            <br>
                            <div class="form-footer">
                                <button type="submit" class="button btn-primary">Upload</button>
                            </div><!-- end .form-footer section -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>

<?= $this->section('pagescript'); ?>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<script>
    new DataTable('#example', {
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
    });
</script>
<?= $this->endSection(); ?>
<?= $this->section('pagecss'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<?= $this->endSection(); ?>