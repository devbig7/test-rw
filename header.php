<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package railsware_theam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class('index index' ); ?>>
    <?php wp_body_open(); ?>
    <a href="https://savelife.in.ua/en/donate-en/" target="_blank" class="freedom-will-win"><span
            class="ukrainain-flag"></span> Stand with Ukraine. <u>Donate to support</u> </a>
    <div class="page-wrapper js-page-wrapper">
        <header class="has-dark-bg header js-header">
            <div class="logo-wrapper">
                <div class="logo-sign">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="logo-text">
                    <svg xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M90.088 9.85a3.202 3.202 0 0 1-.44.848c-1.01 1.397-2.802 1.932-4.442 2.074-2.38.21-3.205.507-3.23 1.332-.02.734.922 1.396 2.6 1.396h4.795v2.61h-4.664c-2.738-.02-5.455-1.515-5.455-4.01V9.56c0-1.544-.106-2.572 1.194-3.735 1.047-.937 2.652-1.46 4.262-1.47 1.977-.014 3.96.62 4.945 1.893.26.34.417.68.51 1.025.2.747.17 1.868-.07 2.577zm-54.645 8.26h-5.788V15.5h7.066c.314 0 .603-.118.825-.312.583-.51.535-1.227.152-1.7-.155-.192-.394-.33-.662-.437-.566-.22-1.343-.343-1.958-.477L34 12.34c-1.455-.32-2.84-.723-3.63-1.83-1.087-1.52-.93-3.44.38-4.782a3.863 3.863 0 0 1 2.765-1.17h5.745v2.61h-5.746c-.986 0-1.586 1.177-1.006 1.907.366.46 1.064.63 1.658.765l1.87.418c1.643.367 3.11.443 4.097 2.263 1.138 2.1.042 4.59-2.057 5.356-.27.1-.513.155-.752.19-.583.08-1.28.046-1.88.046zM20.473 4.558v13.555h2.61V6.443c0-1.094-.185-1.887-1.647-1.887h-.963zm0-4.202V2.96h2.61v-.722c0-1.092-.185-1.883-1.647-1.883h-.963zM9.043 10.652c.99-.645 2.267-.935 3.413-1.035 1.003-.088 1.72-.193 2.21-.342 1.097-.326 1.082-1.205.355-1.658-.414-.258-1.17-.45-1.932-.45H9.095v-2.61h3.863c3.024.02 5.457 1.41 5.457 4.637v3.914c0 1.545.107 2.572-1.194 3.734-1.117 1-2.923 1.504-4.69 1.463-1.89-.045-4.256-.612-5.018-2.568a4.392 4.392 0 0 1-.28-1.58c.005-1.442.59-2.71 1.813-3.505zm1.173 2.365c-.586.68-.5 1.634.196 2.202 1.11.904 5.39.8 5.39-1.545V11.39c-1.374.61-2.742.54-4.006.83-.578.134-1.178.33-1.58.797zM7.48 4.61H6.37C3.06 4.61.35 7.32.35 10.63v7.48h2.61v-7.48c0-1.87 1.54-3.41 3.41-3.41h1.108V4.61zM25.227.356V18.11h2.61V2.24c0-1.092-.185-1.883-1.647-1.883h-.962zM49.395 8.87l2.537 9.24h2.664l3.86-13.554h-2.612L53.26 14l-2.576-9.444-1.29.02-1.286-.02L45.53 14l-2.584-9.444h-2.61l3.86 13.555h2.664l2.535-9.24zm28.992-4.26h-1.11c-3.31 0-6.02 2.708-6.02 6.02v7.48h2.612v-7.48c0-1.87 1.537-3.41 3.406-3.41h1.11V4.61zm-17.135 5.43a8.89 8.89 0 0 1 2.074-.423c1.002-.088 1.72-.193 2.21-.342 1.097-.326 1.08-1.205.355-1.658-.412-.258-1.172-.45-1.932-.45h-4.46v-2.61h4.33c3.024.02 5.458 1.41 5.458 4.637v3.914c0 1.545.105 2.572-1.193 3.734-1.12 1-2.928 1.506-4.695 1.463-1.217-.03-2.523-.287-3.53-.947-.815-.536-1.43-1.348-1.628-2.44-.286-1.573.226-3.048 1.4-4.01.477-.39 1.034-.67 1.612-.87zm.053 2.83c-.746.67-.738 1.694.01 2.306 1.11.905 5.36.9 5.36-1.443V11.39c-1.384.614-2.696.54-3.946.835-.506.12-1.034.293-1.426.645zm25.115-2.817c1.955-.746 1.668-2.742-.742-3.006a7.518 7.518 0 0 0-.787-.043c-1.36-.002-3.03.416-3.03 2.066v1.908c1.64-.725 3.102-.368 4.56-.925z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="hamburger js-hamburger">
                <div class="cheese"></div>
                <div class="salad"></div>
                <div class="meet"></div>
            </div> <a href="/contact/" class="hire-button">Hire Us</a>
        </header>
        <div class="navigation js-menu">
            <div class="navigation-container">
                <?php 

					$menu_name = 'menu-1'; //menu slug
					if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
						$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
					
						$menu_items = wp_get_nav_menu_items($menu->term_id);
						
						//print_r($menu_items);
					
						foreach ( (array) $menu_items as $key => $menu_item ) {
							 if($menu_item->menu_item_parent <= 1) {
									$id_parent_item = $menu_item->ID;
								?>
								
									<ul class="navigation-column <?php echo $title = $menu_item->classes[0]; ?>"> 
										<span class="column-title"> 
											<a class="enlarged-link" href="<?php echo $title = $menu_item->url; ?>"><?php echo $title = $menu_item->title; ?> </a> 
										</span>
										<div class="links-container">
											<?php 
												foreach ( (array) $menu_items as $key_sub => $menu_item_sub ) {
													if($menu_item_sub->menu_item_parent == $id_parent_item) {
													?>
														<li class="single-link-container"> <a class="single-link <?php echo $title = $menu_item_sub->classes[0]; ?>" href="<?php echo $title = $menu_item_sub->url; ?>" target=""><?php echo $title = $menu_item_sub->title; ?> </a></li>
													<?php
													}
												}
											?>
										</div>
									</ul>

								<?php

							 }
						}
					}
					

				?>
                <!-- <?php
					wp_nav_menu(
						array(
							'container' => '',
							'items_wrap'           => '%3$s',
							'before'               => '<span class="column-title">',
							'after'                => '</span>',
							'link_before'          => '',
							'link_after'           => '',
							'walker'               => '',
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?> -->
            </div>
        </div>