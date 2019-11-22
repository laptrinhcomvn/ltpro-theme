<div id="primary-nav-bar" class="row">
    <nav class="col-12 navbar navbar-expand-lg navbar-light">
        <div class="col-md-2">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo ltpro_get_custom_logo(); ?>" />
            </a>
        </div>

        <div class="col-md-10 rightside">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-9">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="main-nav">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'navbar-nav mr-auto',
                                'container_id'   => 'primary-top-menu'
                            ) );
                            ?>
                            
                        </div>
                    </div>
                    <div class="col-sm-3 primarymenu">
                        <?php dynamic_sidebar( 'primarymenu' ); ?>
                    </div>
                </div>
            </div>
            
        </div>
    </nav>
</div>

