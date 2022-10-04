<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package railsware_theam
 */

get_header();
?>

<main class="content js-content">
    <section class="global-container main-screen">
        <div class="content-container">
            <div class="left-container">
                <h1> Railsware <strong>Product</strong> <strong>Studio</strong> </h1>
                <p class="subtitle"> Damn good at building products. <br>Happy customers can prove that.<br> </p>
            </div>
            <div class="right-container"> <a class="products-container navigation-block" href="/products/">
                    <div class="block-wrapper">
                        <div class="navigation-block__content">
                            <h2 class="navigation-block__content_title products-title">Products</h2>
                            <p class="navigation-block__content_description">If you’re an investor or Railsware products
                                user, check out Mailtrap, Coupler, and SmartChecklist</p>
                        </div>
                    </div>
                </a> <a class="services-container navigation-block" href="/services/">
                    <div class="block-wrapper">
                        <div class="navigation-block__content">
                            <h2 class="navigation-block__content_title services-title">Services</h2>
                            <p class="navigation-block__content_description">If you're an entrepreneur looking for a
                                tech partner, we will help you to succeed with your product</p>
                        </div>
                    </div>
                </a> </div>
        </div>
    </section>
</main>

<?php
get_footer();