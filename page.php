<?php get_header(); ?>

    <div class="container" id="mainBody">
        <div class="mb-3 p-2">
            <?php if (have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <h2 class="text-center"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>
