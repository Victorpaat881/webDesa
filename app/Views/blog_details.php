<?= $this->extend('layout/__layout'); ?>

<?= $this->section('content'); ?>

<section>
    <div class="header-inner two">
        <div class="inner text-center">
            <h4 class="title text-white uppercase">Artikel Desa Tenga</h4>
            <h5 class="text-white uppercase">Selamat datang</h5>
        </div>
        <div class="overlay bg-opacity-5"></div>
        <img src="http://placehold.it/1920x800" alt="" class="img-responsive">
    </div>
</section>
<!--end section-->
<div class="clearfix"></div>

<!-- <section>
    <div class="pagenation-holder">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Blog Standard</h3>
                </div>
                <div class="col-md-6 text-right">
                    <div class="pagenation_links"><a href="index.html">Home</a><i> / </i> <a href="index.html">Blog</a> <i> / </i> Blog Standard</div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--end section-->
<div class="clearfix"></div>

<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 bmargin">
                <div class="col-md-12 bmargin">
                    <div class="blog-holder-12">
                        <div class="image-holder">
                            <div class="overlay bg-opacity-1">
                                <div class="post-date-box three"> <?= date('d', strtotime($post['created_at'])) ?> <span><?= date('M, Y', strtotime($post['created_at'])) ?></span> </div>
                                <!-- <div class="post-date-box three four"> 25 <span>May, 2020</span> </div> -->
                            </div>
                            <img class="img-responsive" alt="" src="<?= ($post['banner'] == '') ? 'http://placehold.it/1000x600' : $post['banner'] ?>">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <a href="#">
                        <h4 class="less-mar1"><?= $post['title'] ?></h4>
                    </a>
                    <div class="blog-post-info"> <span><i class="fa fa-user"></i> By <?= $post['author'] ?></span>
                        <!-- <span><i class="fa fa-comments-o"></i> 15 Comments</span>  -->
                    </div>
                    <br>
                    <div class="">
                        <?= $post['content'] ?>
                    </div>
                    <?php if (user() && ($post['user_id'] == user()->id)) : ?>
                        <br>
                        <a class="btn btn-orange btn-small btn-round" href="<?= base_url('admin/posts/' . $post['post_id']) ?>">Edit Artikel</a>
                        <br>
                    <?php endif ?>
                    <br>
                    <h4 class="less-mar3"><a href="#">Share this Article</a></h4>
                    <br>
                    <ul class="social-icons-2">
                        <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <br>
                    <div class="blog1-post-info-box">
                        <div class="text-box border padding-3">
                            <div class="iconbox-medium left round overflow-hidden"><img src="http://placehold.it/110x110" alt="" class="img-responsive"></div>
                            <div class="text-box-right more-padding-2">
                                <h4><?= $post['author'] ?></h4>
                                <p>Artikel Desa Tenga </p>
                                <br>
                                <a class="btn btn-border orange-2 btn-small-2" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                    <div class="clearfix"></div>
                    <br>
                    <br>
                    <h4 class="less-mar3"><a href="#">Related Posts</a></h4>
                    <br>
                    <?php foreach ($related_posts as $key => $related_post) : ?>
                        <div class="col-md-4 bmargin">
                            <div class="image-holder"><a href="<?= base_url('home/blog' . $related_post['post_id']) ?>"><img src="<?= ($related_post['banner'] == '') ? 'http://placehold.it/1000x800' : $related_post['banner'] ?>" alt="" class="img-responsive"></a></div>
                            <div class="clearfix"></div>
                            <h5 class="dosis uppercase less-mar1"><a href="<?= base_url('home/blog/' . $related_post['post_id']) ?>"><?= $related_post['title'] ?></a></h5>
                            <div class="blog1-post-info"> <span>By <?= $related_post['author'] ?></span> <span><?= date('d M Y', strtotime($related_post['created_at'])) ?></span> </div>
                        </div>
                    <?php endforeach ?>
                    <!--end item-->

                    <div class="clearfix"></div>
                    <br>
                    <br>
                    <h4 class="less-mar3"><a href="#">Comments</a></h4>
                    <br>
                    <?php foreach (($comments ?? []) as $key => $comment) : ?>
                        <div class="blog1-post-info-box">
                            <div class="text-box border padding-3">
                                <div class="iconbox-medium left round overflow-hidden" style="color: gray; background-color:darkgray; position:relative">
                                    <span style="position: absolute;font-weight: bolder;font-size: 90px;left: 0;right: 0;top: 0;bottom: 0;">
                                        <?= substr(strtoupper($comment['username'] == '' ? 'Anonymous' : $comment['username']), 0, 1) ?>
                                    </span>
                                </div>
                                <div class="text-box-right more-padding-2">
                                    <h5 class="less-mar2"><?= $comment['username'] == '' ? 'Anonymous' : $comment['username'] ?></h5>
                                    <div class="blog1-post-info"> <span><?= date('D, d M Y', strtotime($comment['created_at'])) ?></span></div>
                                    <p class="paddtop1"><?= $comment['content'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                    <?php endforeach ?>
                    <!--end item-->

                    <div class="clearfix"></div>

                    <div class="smart-forms bmargin">
                        <h4>Post a Comment</h4>
                        <form method="post" action="<?= base_url('home/create_comment/' . $post['post_id']) ?>" id="smart-form" novalidate="novalidate">
                            <div>
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="username" id="sendername" class="gui-input" placeholder="Enter name">
                                        <span class="field-icon"><i class="fa fa-user"></i></span> </label>
                                </div>
                                <!-- end section -->

                                <div class="section" style="visibility:hidden; position:absolute">
                                    <label class="field prepend-icon">
                                        <input type="text" name="user_id" id="userId" class="gui-input" placeholder="invisible" value="<?= user()->id ?? '' ?>">
                                        <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                                </div>
                                <div class="section" style="visibility:hidden; position:absolute">
                                    <label class="field prepend-icon">
                                        <input type="text" name="post_id" id="postId" class="gui-input" placeholder="invisible" value="<?= $post['post_id'] ?? '' ?>">
                                        <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                                </div>
                                <div class="section" style="visibility:hidden; position:absolute">
                                    <label class="field prepend-icon">
                                        <input type="text" name="created_at" id="created" class="gui-input" placeholder="invisible" value="<?= date('Y-m-d', now())  ?? '' ?>">
                                        <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="content" name="content" placeholder="Enter message"></textarea>
                                        <span class="field-icon"><i class="fa fa-comments"></i></span> <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span> </label>
                                </div>
                                <!-- end section -->

                                <div class="result"></div>
                                <!-- end .result  section -->

                            </div>
                            <!-- end .form-body section -->
                            <div class="form-footer">
                                <button type="submit" data-btntext-sending="Sending..." class="button btn-primary orange-2">Submit</button>
                                <button type="reset" class="button"> Cancel </button>
                            </div>
                            <!-- end .form-footer section -->
                        </form>
                    </div>
                    <!-- end .smart-forms section -->

                </div>
                <!--end item-->

            </div>
            <!--end left column-->

            <div class="col-md-4 col-sm-12 col-xs-12 bmargin">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding bmargin">
                    <h5>Categories</h5>
                    <ul class="category-links orange-2">
                        <?php foreach ($categories as $category) : ?>
                            <li><a class="active" href="#"><?= $category['name'] ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding bmargin">
                    <h5>Search</h5>
                    <div class="clearfix"></div>
                    <input class="blog1-sidebar-serch_input" type="search" placeholder="Email Address">
                    <input name="" value="Submit" class="blog1-sidebar-serch-submit" type="submit">
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding bmargin">
                    <h5>Latest Posts</h5>
                    <div class="clearfix"></div>
                    <?php foreach ($latest_posts as $key => $latest_post) : ?>
                        <div class="sidebar-posts <?= $post['post_id'] == $latest_post['post_id'] ? 'active' : '' ?>">
                            <div class="image-left"><img src="<?= ($latest_post['banner'] == '') ? 'http://placehold.it/80x80' : $latest_post['banner'] ?>" width="80" height="80" alt=""></div>
                            <div class="text-box-right">
                                <h6 class="less-mar3 nopadding"><a href="<?= base_url('home/blog/' . $latest_post['post_id']) ?>"><?= $latest_post['title'] ?></a></h6>
                                <p>Read More</p>
                                <div class="post-info"> <span>By <?= $latest_post['author'] ?></span><span> <?= date('M Y', strtotime($latest_post['created_at'])) ?></span> </div>
                            </div>
                        </div>
                        <!--end item-->
                    <?php endforeach ?>
                </div>
                <!--end sidebar box-->

                <div class="clearfix"></div>
                <br>
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding bmargin">
                    <h5>Tags</h5>
                    <div class="clearfix"></div>
                    <ul class="tags-2">
                        <?php foreach ($tags as $tag) : ?>
                            <li><a class="<?= in_array($tag['tag_id'], $post_tags ?? []) ? 'active' : '' ?>" href="#"><?= $tag['name'] ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <!--end sidebar box-->
            </div>
            <!--end right column-->
        </div>
    </div>
</section>
<!--end section-->
<div class="clearfix"></div>


<?= $this->endSection(); ?>