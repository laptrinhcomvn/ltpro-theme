<div id="primary-nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="col-2 col-sm-1 d-block d-md-none"></div>

        <div class="col-8 col-sm-10 col-md-2 text-center">
            <div class="navbar-brand">
                <?php ltpro_site_logo(); ?>
            </div>
        </div>

        <div class="col-2 col-sm-1 d-block d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav-mobile" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
        </div>

        <div class="col-0 col-sm-0 col-md-8 d-none d-md-block">
            <div class="lg-nav">
                <div class="collapse navbar-collapse d-flex justify-content-center" id="main-nav">
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
        </div>

        <div class="col-0 col-sm-0 col-md-2 primary-nav-col3 text-right d-none d-md-block">
            <?php dynamic_sidebar( 'primary-nav-col3' ); ?>
        </div>

        
    </nav>
</div>


<div class="animated fadeInDown faster container-fluid d-none w-100 h-100 nav-mobile" id="main-nav-mobile">
    <div class="text-right">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav-mobile" aria-controls="main-nav" aria-expanded="true" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <i class="fas fa-times"></i>
            </button>
    </div>

    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
        'menu_class'     => 'navbar-nav mr-auto mobile',
        'container_id'   => 'primary-top-menu-mobile'
    ) );
    ?>
</div>
