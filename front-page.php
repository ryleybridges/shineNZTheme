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
            <p class="mt-1 mx-5 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="row mx-2 my-3 pb-4">
            <?php $the_query = new WP_Query( array(
                'category_name' => 'news',
                'posts_per_page' => 3,
            )); ?>

            <?php if($the_query->have_posts()): ?>
                <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                    <div class="card mt-2 col-12 d-flex justify-content-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-12">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="col-md-9 col-12">
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
