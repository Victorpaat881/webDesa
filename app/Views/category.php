<?= $this->extend('layout/__layout'); ?>

<?= $this->section('content'); ?>
<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 20px;">Act</th>
                            <th style="width: 20px;">ID</th>
                            <th>Category Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $key => $category) : ?>
                            <tr>
                                <td style="background-color:red;"><a href="<?= base_url('admin/delete_category/' . $category['category_id']) ?>" style="color:white; font-weight:bold">Delete</a></td>
                                <td><?= ++$key ?></td>
                                <td><?= $category['name'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="text-box padding-4 border">
                    <div class="smart-forms smart-container wrap-3">
                        <h4 class="uppercase">Category Form</h4>
                        <form method="post" action="<?= base_url('admin/create_category') ?>" id="contact">
                            <div>
                                <div class="spacer-b30">
                                    <!-- .tagline -->
                                </div>

                                <!-- end section -->
                                <div class="spacer-t30 spacer-b30">
                                    <div class="tagline"><span> Input Category </span></div><!-- .tagline -->
                                </div>

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="category" id="category" class="gui-input" placeholder="Enter Category">
                                        <span class="field-icon"><i class="fa fa-dashboard"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div><!-- end .form-body section -->
                            <div class="form-footer">
                                <button type="submit" class="button btn-primary">Input</button>
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