<footer class="navBottomColour" style="width: 100%;">
    <div class="row">
        <div class="col">
            <?php if(has_nav_menu('bottom_navigation')): ?>
                <nav class="navbar navbar-expand-md navbar-light navBottomColour" role="navigation">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'bottom_navigation',
                                'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => 'bs-example-navbar-collapse-1',
                                'menu_class'      => 'navbar-nav mr-auto flex-column',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ));
                         ?>
                    </div>
                </nav>
            <?php endif; ?>
        </div>
        <div class="col">
            <?php if(get_theme_mod('shine_footerTextInfo')): ?>
                <p class="text-right pr-5 pt-4"><?php get_theme_mod('shine_footerTextInfo'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</footer>
<?php if((get_theme_mod('shine_buttonSwitchEnds') === 'bottom') || (get_theme_mod('shine_buttonSwitchEnds') === 'both')): ?>
    <nav class="navbar navbar-expand-md navbar-light buttonNavColour">
        <div class="row">
            <div class="col-12 float-left">
                <div>
                    <button type="button" name="button" class="btn btn-orange mr-4 float-left" aria-label="Donate Button"><a class="topBtn" href="https://secure.flo2cash.co.nz/donations/shine/DonateSecure.aspx">DONATE</a></button>
                    <button type="button" name="button" class="btn btn-orange" aria-label="Quick Exit"><a class="topBtn" href="https://www.stuff.co.nz/">QUICK EXIT</a></button>
                </div>
            </div>
        </div>
    </nav>
<?php endif; ?>



<?php wp_footer(); ?>
</body>
</html>
