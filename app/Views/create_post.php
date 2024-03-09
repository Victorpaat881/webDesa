<?= $this->extend('layout/__layout'); ?>

<?= $this->section('content'); ?>
<section class="sec-padding">
    <form action="<?= ($post['post_id'] ?? '') ? base_url('admin/update_post/' . $post['post_id']) : base_url('admin/create_post') ?>" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="smart-forms bmargin">
                        <div>
                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="text" name="title" id="postTitle" class="gui-input" placeholder="Tambahkan Judul Artikel" value="<?= $post['title'] ?? '' ?>">
                                    <span class="field-icon"><i class="fa fa-bookmark"></i></span> </label>
                            </div>
                            <!-- end section -->
                            <div class="result"></div>
                            <!-- end .result  section -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="smart-forms bmargin">
                        <div>
                            <!-- <div class="section">
                                    <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                                        <span class="field-icon"><i class="fa fa-comments"></i></span> <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span> </label>
                                </div> -->
                            <div id="quill-editor" style="min-height:500px">
                                <?= $post['content'] ?? '' ?>
                            </div>
                            <textarea name="content" id="quill-article" style="visibility:hidden; position:absolute">
                        </textarea>
                            <div class="result"></div>
                            <!-- end .result  section -->

                        </div>
                        <!-- end .form-body section -->
                        <div class="form-footer">
                            <button type="submit" onclick="updatecontent()" data-btntext-sending="Sending..." class="button btn-primary orange-2">Submit</button>
                            <button type="reset" class="button"> Cancel </button>
                        </div>
                        <!-- end .form-footer section -->
                    </div>
                    <!-- end .smart-forms section -->
                </div>


                <div class="col-md-3">
                    <div class="smart-forms bmargin">
                        <div>
                            <strong>Category</strong>

                            <div class="section" style="margin-top:1.5rem">
                                <?php foreach ($categories as $key => $category) : ?>
                                    <label class="switch block">
                                        <input type="radio" name="category" <?= $category['category_id'] == $post_category ? 'checked' : '' ?> value="<?= $category['category_id'] ?>" required>
                                        <span class="switch-label" for="category" data-on="" data-off=""></span>
                                        <span> <?= $category['name'] ?></span>
                                    </label>
                                <?php endforeach ?>
                            </div>
                            <!-- end section -->
                            <strong>Labels</strong>
                            <div class="section">
                                <?php foreach ($tags as $key => $tag) : ?>
                                    <label class="switch block">
                                        <input type="checkbox" name="tag[]" value="<?= $tag['tag_id'] ?>" <?= in_array($tag['tag_id'], $post_tag) ? 'checked' : '' ?>>
                                        <span class="switch-label" for="tag" data-on="" data-off=""></span>
                                        <span> <?= $tag['name'] ?></span>
                                    </label>
                                <?php endforeach ?>
                            </div>
                            <strong>Link</strong>
                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="text" name="postLink" id="postLink" class="gui-input" placeholder="Tambahkan Custom Link Artikel" pattern="^[^\s]{1,20}$" value="<?= $post['link'] ?? '' ?>" required>
                                    <span class=" field-icon"><i class="fa fa-bookmark"></i></span> </label>
                            </div>
                            <strong>Banner</strong>
                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="text" name="banner" id="banner" class="gui-input" placeholder="Tambahkan Custom Link Artikel" value="<?= $post['banner'] ?? '' ?>">
                                    <span class=" field-icon"><i class="fa fa-bookmark"></i></span> </label>
                            </div>

                            <div style="visibility: hidden; position:absolute;">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="userId" id="userId" class="gui-input" placeholder="User Id" value="<?= user()->id ?>">
                                        <span class="field-icon"><i class="fa fa-bookmark"></i></span> </label>
                                </div>
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="author" id="author" class="gui-input" placeholder="Author" value="<?= user()->username ?>">
                                        <span class="field-icon"><i class="fa fa-bookmark"></i></span> </label>
                                </div>
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="created_at" id="created_at" class="gui-input" placeholder="created_at" value="<?= $post['created_at'] ?? date('Y-m-d', now()) ?>">
                                        <span class="field-icon"><i class="fa fa-bookmark"></i></span> </label>
                                </div>
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="updated_at" id="updated_at" class="gui-input" placeholder="updated_at" value="<?= date('Y-m-d', now()) ?>">
                                        <span class="field-icon"><i class="fa fa-bookmark"></i></span> </label>
                                </div>
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="postId" id="postId" class="gui-input" placeholder="postId" value="<?= $post['post_id'] ?? '' ?>">
                                        <span class="field-icon"><i class="fa fa-bookmark"></i></span> </label>
                                </div>
                                <div class="result"></div>
                            </div>
                            <!-- end .result  section -->
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </form>
</section>
<div class="clearfix"></div>

<?= $this->endSection(); ?>

<?= $this->section('pagescript'); ?>
<script>
    var updatecontent = () => {
        document.getElementById('quill-article').innerHTML = document.getElementById('quill-editor').querySelector('.ql-editor').innerHTML;
        return true;
    }
</script>
<script>
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        ['blockquote', 'code-block'],

        [{
            'header': 1
        }, {
            'header': 2
        }], // custom button values
        [{
            'list': 'ordered'
        }, {
            'list': 'bullet'
        }],
        [{
            'script': 'sub'
        }, {
            'script': 'super'
        }], // superscript/subscript
        [{
            'indent': '-1'
        }, {
            'indent': '+1'
        }], // outdent/indent
        [{
            'direction': 'rtl'
        }], // text direction

        [{
            'size': ['small', false, 'large', 'huge']
        }], // custom dropdown
        [{
            'header': [1, 2, 3, 4, 5, 6, false]
        }],

        [{
            'color': []
        }, {
            'background': []
        }], // dropdown with defaults from theme
        [{
            'font': []
        }],
        [{
            'align': []
        }],
        [
            'link', 'image'
        ],
        ['clean'] // remove formatting button
    ];

    var quill = new Quill('#quill-editor', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });
</script>
<?= $this->endSection(); ?>