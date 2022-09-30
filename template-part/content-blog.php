<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Blog Post</h5>
                <h1 class="display-4">Our Latest Medical Blog Posts</h1>
            </div>
            <div class="row g-5">

            <?php
                if (have_posts()):
                    while (have_posts()) : the_post();
                        $image_url = get_the_post_thumbnail_url(get_the_ID(),'medium');
                    ?>

                        <div class="col-xl-4 col-lg-6">
                            <div class="bg-light rounded overflow-hidden">
                                <img class="img-fluid w-100" src="<?php echo $image_url; ?>" alt="">
                                <div class="p-4">
                                    <a class="h3 d-block mb-3" href=""><?php the_title(); ?></a>
                                    <p class="m-0"><?php the_content(); ?></p>
                                </div>
                                <div class="d-flex justify-content-between border-top p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-2" src="<?php echo get_theme_file_uri('img/user.jpg');?>" width="25" height="25" alt="">
                                        <small><?php the_author(); ?></small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                                        <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php

                    endwhile;
                    else :
                        _e('Sorry, you have no posts!', 'classicmedinova');
                endif;
            ?>

            </div>
        </div>
</div>