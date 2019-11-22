<div id="primary-nav-bar" class="row">
    <nav class="col-12 navbar navbar-expand-lg navbar-light">
        <div class="col-4 col-sm-6 col-md-3">
            <div class="navbar-brand">
                <?php ltpro_site_logo(); ?>
            </div>
        </div>

        <div class="col-8 col-sm-6  col-md-9 rightside">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-10">
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
                    <div class="col-6 col-md-6 col-lg-2 primarymenu">
                        <?php dynamic_sidebar( 'primarymenu' ); ?>
                    </div>
                </div>
            </div>
            
        </div>
    </nav>
</div>

