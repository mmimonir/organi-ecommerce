<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section class="breadcrumb-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/breadcrumb.jpg'); background-repeat: no-repeat;  background-size: cover;  background-position: top center;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb__text">
					<h2><?php the_title(); ?></h2>
					<div class="breadcrumb__option">
						<a href="<?php echo site_url(); ?>">Home</a>
						<a href="<?php echo site_url(); ?>"><?php the_title(); ?></a>
						<span><?php $categ = $product->get_categories();
								echo $categ; ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="product-details spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="product__details__pic">
					<div class="product__details__pic__item">
						<?php woocommerce_show_product_sale_flash(); ?>
						<?php woocommerce_show_product_images(); ?>
					</div>
				</div>
				<!-- <div class="product__details__pic__slider owl-carousel owl-loaded owl-drag">
						<div class="owl-stage-outer">
							<div class="owl-stage" style="transform: translate3d(-1006px, 0px, 0px); transition: all 1.2s ease 0s; width: 1725px;">
								<div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt=""></div>
								<div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt=""></div>
								<div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt=""></div>
								<div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt=""></div>
								<div class="owl-item" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt=""></div>
								<div class="owl-item" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt=""></div>
								<div class="owl-item" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt=""></div>
								<div class="owl-item active" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt=""></div>
								<div class="owl-item cloned active" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt=""></div>
								<div class="owl-item cloned active" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt=""></div>
								<div class="owl-item cloned active" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt=""></div>
								<div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt=""></div>
							</div>
						</div>
						<div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
						<div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div>
					</div> -->
			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="product__details__text">
				<?php woocommerce_template_single_title(); ?>
				<div class="product__details__rating">
					<!-- <i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<span>(18 reviews)</span> -->
					<?php woocommerce_template_single_rating(); ?>
				</div>
				<?php woocommerce_template_single_price(); ?>
				<?php woocommerce_template_single_excerpt(); ?>
				<div class="product__details__quantity">
					<div class="quantity">
						<div class="pro-qty"><span class="dec qtybtn">-</span>
							<input type="text" value="1">
							<span class="inc qtybtn">+</span>
						</div>
					</div>
				</div>
				<a href="#" class="primary-btn">ADD TO CARD</a>
				<a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
				<ul>
					<li><b>Availability</b> <span>In Stock</span></li>
					<li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
					<li><b>Weight</b> <span>0.5 kg</span></li>
					<li><b>Share on</b>
						<div class="share">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="product__details__tab">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Description</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Information</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Reviews <span>(1)</span></a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tabs-1" role="tabpanel">
						<div class="product__details__tab__desc">
							<h6>Products Infomation</h6>
							<p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
								Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus
								suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam
								vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.
								Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat,
								accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a
								pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula
								elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus
								et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
								vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>
							<p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
								ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
								elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
								porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
								nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
								Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed
								porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum
								sed sit amet dui. Proin eget tortor risus.</p>
						</div>
					</div>
					<div class="tab-pane" id="tabs-2" role="tabpanel">
						<div class="product__details__tab__desc">
							<h6>Products Infomation</h6>
							<p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
								Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
								Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
								sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
								eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
								Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
								sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
								diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
								ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
								Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
								Proin eget tortor risus.</p>
							<p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
								ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
								elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
								porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
								nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
						</div>
					</div>
					<div class="tab-pane" id="tabs-3" role="tabpanel">
						<div class="product__details__tab__desc">
							<h6>Products Infomation</h6>
							<p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
								Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
								Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
								sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
								eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
								Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
								sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
								diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
								ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
								Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
								Proin eget tortor risus.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<div id="product- <?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action('woocommerce_before_single_product_summary');
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action('woocommerce_single_product_summary');
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action('woocommerce_after_single_product_summary');
	?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>