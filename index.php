<?php get_header(); ?>

        <div class="container" id="homeBody">
            <h1 class="text-center"><?php echo get_bloginfo('name'); ?></h1>
            <h4 class="text-center"><?php echo get_bloginfo('description'); ?></h4>
            <div class="row">
                <div class="col">
                    <h3 class="text-center mt-4">Recent News</h3>
                </div>
            </div>
            <div class="row mx-2 my-3">
                <?php $the_query = new WP_Query( array(
                    'category_name' => 'news',
                    'posts_per_page' => 3,
                )); ?>

                <?php if($the_query->have_posts()): ?>
                    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                        <div class="card mt-2 col-12 d-flex justify-content-center" style="height: 17rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="col-9">
                                        <h3><?php the_title(); ?></h3>
                                        <p class="card-text"><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-orange">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <a href="#" class="btn btn-orange mb-3">More News</a>
        </div>

<?php get_footer(); ?>
