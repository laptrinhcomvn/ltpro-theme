<footer class="footer-wrapper">
    <div class="container footer-info">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <?php if (is_active_sidebar('footer-colum1')): ?>
                                <?php dynamic_sidebar('footer-colum1');?>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-sm-6">
                            <?php if (is_active_sidebar('footer-colum2')): ?>
                                <?php dynamic_sidebar('footer-colum2');?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <?php if (is_active_sidebar('footer-colum3')): ?>
                    <?php dynamic_sidebar('footer-colum3');?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-3">
                <?php if (is_active_sidebar('footer-colum4')): ?>
                    <?php dynamic_sidebar('footer-colum4');?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="bottom-bar text-center">
        <?php if (is_active_sidebar('bottom-bar')): ?>
            <?php dynamic_sidebar('bottom-bar');?>
        <?php endif; ?>
    </div>
</footer>