<!-- Start Logo -->
<a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logodefault">
          <img id="logo" src="<?php the_field('logo', 'option'); ?>" srcset="<?php the_field('logo', 'option'); ?> 1x, 
          <?php the_field('logo_2', 'option'); ?> 2x" alt="<?php bloginfo( 'name' ); ?>">
                                        </a>
<!-- End Logo -->
