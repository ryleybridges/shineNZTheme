<?php get_header(); ?>

<div class="container">

    <div class="row">

    <?php if(has_nav_menu('side_navigation')): ?>
        <?php if(get_theme_mod('shine_sidebarSwitch') === 'left'): ?>
            <div class="col-4 col-md-3" id="sidebarNav">
                <div class="card h-90 mb-2 mt-2 p-2">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'side_navigation',
                        'menu_class' => 'list-group list-group-flush',
                        'container' => '',
                        'menu_id' => 'sideNav'
                    )); ?>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if(!has_nav_menu('side_navigation')): ?>
        <div class="col-12">
            <div class="card mb-3 mt-3 p-3">
                <?php if (have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <h2 class="text-center"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php else: ?>
        <div class="col">
            <div class="card mb-3 mt-3 p-3">
                <?php if (have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <h2 class="text-center"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(has_nav_menu('side_navigation')): ?>
        <?php if((get_theme_mod('shine_sidebarSwitch') === 'right') || (get_theme_mod('shine_sidebarSwitch') === '')): ?>
            <div class="col-4 col-md-3" id="sidebarNav">
                <div class="card h-90 mb-2 mt-2 p-2">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'side_navigation',
                        'menu_class' => 'list-group list-group-flush',
                        'container' => '',
                        'menu_id' => 'sideNav'
                    )); ?>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    </div>

</div>

<?php get_footer(); ?>
