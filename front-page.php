<?php get_header(); ?>

    <?php if(has_header_image()): ?>
        <div class="container-fluid p-0">
            <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>)">
            </div>
        </div>
    <?php else: ?>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="display-3 mainHeaderText"><?php echo get_bloginfo('name'); ?></h1>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="container" id="indexBody">
        <h2 class="pt-2 text-center"><?php echo get_bloginfo('description'); ?></h2>
        <div class="row">
            <p class="mt-1 mx-5 text-center"><?php echo get_theme_mod('shine_textBlurb'); ?></p>
        </div>
        <div class="row mx-2 my-3 pb-4">
            <?php $the_query = new WP_Query( array(
                'posts_per_page' => 3,
            )); ?>

            <?php if($the_query->have_posts()): ?>
                <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                    <div class="card mt-2 col-12 d-flex justify-content-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-3 col-sm-4">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="col-12 col-md-7 col-sm-6">
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
    </div>

<?php get_footer(); ?>
