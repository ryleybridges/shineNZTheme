<?php get_header(); ?>

        <div class="container" id="indexBody">
            <h1 class="text-center"><?php echo get_bloginfo('name'); ?></h1>
            <h4 class="text-center"><?php echo get_bloginfo('description'); ?></h4>
            <div class="row mx-2 my-3 pb-3">

                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>

                        <div class="card mt-2 col-12 d-flex justify-content-center">
                            <div class="card-body">
                                <div class="row">
                                    <?php if (!is_singular()): ?>
                                        <?php if(has_post_thumbnail()): ?>
                                            <div class="col-12 col-md-3">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <h3><?php the_title(); ?></h3>
                                                <p class="card-text"><?php the_excerpt(); ?></p>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-orange">Read More</a>
                                            </div>
                                        <?php else: ?>
                                            <div class="col-12">
                                                <h3><?php the_title(); ?></h3>
                                                <p class="card-text"><?php the_excerpt(); ?></p>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-orange">Read More</a>
                                            </div>
                                        <?php endif; ?>

                                    <?php else: ?>
                                        <div class="col-12">
                                            <h3><?php the_title(); ?></h3>
                                            <?php the_content(); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

<?php get_footer(); ?>
