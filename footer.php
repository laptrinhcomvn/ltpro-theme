<footer class="site-footer">
	<div class="site-info">
			<?php
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'laptrinhcomvn' ), 'LTPro', '<a href="https://laptrinh.com.vn">LTPro Team</a>' );
			?>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	WebFontConfig = {
		google: {
			families: ['Montserrat']
		},
		active: function() {
			sessionStorage.fonts = true;
		}
	};

	(function() {
      if (sessionStorage.fonts) {
        document.documentElement.classList.add('wf-active');
      }
    })();
</script>
</body>
</html>