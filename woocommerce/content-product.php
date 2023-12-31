<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<li <?php wc_product_class('', $product); ?>>
	<div class="product__item">
		<div class="product__item__pic" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>); background-repeat: no-repeat;  background-size: cover;  background-position: top center;">
			<?php woocommerce_show_product_loop_sale_flash(); ?>
			<ul class="product__item__pic__hover">
				<li><?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?></li>
				<li><a href="<?php echo site_url(); ?>/?action=yith-woocompare-add-product&amp;id=<?php echo get_the_ID(); ?>" class="compare button" data-product_id="35" rel="nofollow"><i class="fa fa-retweet"></i></a></li>
				<li>
					<a href="<?php echo site_url(); ?>?add-to-cart=<?php echo get_the_ID(); ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>">
						<i class="fa fa-shopping-cart"></i>
					</a>
				</li>
			</ul>
		</div>
		<div class="product__item__text">
			<span>
				<?php
				// get woocommerce product category name
				$categ = $product->get_categories();
				echo $categ;
				?>
			</span>
			<h6><a href="<?php the_permalink(); ?>"><?php woocommerce_template_loop_product_title(); ?></a></h6>
			<h5><?php woocommerce_template_loop_price(); ?></h5>
		</div>
	</div>
</li>