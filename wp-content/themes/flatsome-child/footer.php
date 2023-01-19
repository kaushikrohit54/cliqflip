<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</main>

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>
<div class="mobileFooterNav small-text-center">
	<div class="row small-columns-5 row-small">
		<div class="col">
			<div class="homeIcon">
				<a href="https://cliqflip.com/"><img src="<?php echo get_stylesheet_directory_uri().'/img/download.svg';?>"><span>Home</span></a>
			</div>
		</div>
		<div class="col">
		<div class="homeIcon">
				<a href="/categories"><img src="<?php echo get_stylesheet_directory_uri().'/img/category.svg';?>"><span>Categories</span></a>
			</div>
		
		</div>
		<div class="col">
		<div class="homeIcon">
				<a href="/best-deals"><img src="<?php echo get_stylesheet_directory_uri().'/img/discount.png';?>"><span>Deals</span></a>
			</div>
		</div>
		<div class="col">
		<div class="homeIcon">
				<a href="/wishlist/"><img src="<?php echo get_stylesheet_directory_uri().'/img/wishlist.svg';?>"><span>Wishlist</span></a>
			</div>
		</div>
		<div class="col">
		<div class="homeIcon">
				<a href="/my-account"><img src="<?php echo get_stylesheet_directory_uri().'/img/myaccount.svg';?>"><span>Account</span></a>
			</div>
		</div>
	</div>
</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
