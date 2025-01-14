<?php get_header(); ?>

<section class="site-width road-transport-hero-wrap" style="position: relative;">
    <div class="road-transport-hero-content">
        <img loading="lazy" class="rev-decore" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-3.svg'; ?>" style="height: 35rem; left: 70%; top: -15rem; transform: rotate(29deg);">
        <h1 style="padding-bottom: 2rem; position: relative;">
            <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/small-grid.svg'; ?>" style="height: 18rem; left: -10rem; top: -30%;">
            We get the <span class="grad-text">road transport industry</span>.
        </h1>
        <p>We bring our deep understanding of the road transport industries to help our clients succeed. Revival work with:</p>
        <ul class="road-transport-bullets">
            <li>Commercial Vehicle Leasing</li>
            <li>Vehicle Bodybuilding</li>
            <li>Chilled Goods Transportation</li>
            <li>Servicing and Parts</li>
            <li>Specialist Transporters</li>
            <li>Modular Construction Specialists</li>
        </ul>
    </div>
    <div class="rev-card rev-padding form-card" style="position: relative;">
        <img class="bhf-truck-cutout" src="<?php echo get_template_directory_uri() . '/assets/imgs/bhf-truck-project-card-sml.png'; ?>" alt="Bumble Hole Foods Vehicle Livery">
        <h3>Thanks for visiting us at the Road Transport Expo!</h3>
        <img loading="lazy" class="rev-decore" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-2.svg'; ?>" style="height: 42rem; left: -22%; bottom: -11rem; transform: rotate(180deg);">
        <?php echo do_shortcode('[hf_form slug="road-transport-contact"]'); ?> <!-- form shortcode, configured with the HTML Forms plugin -->
    </div>
</section>

<?php 
    // Define Query Parameters
    $homeArgs = array(
        'tag'       => 'transport',
        'post_type' => 'projects',
        'orderby'  => 'ID'
    );
    $home_posts = new WP_Query( $homeArgs );
?>
<section class="site-width road-transport-slide-title-wrap">
    <h2 class="road-transport-slide-title">Check out some of our transport projects.</h2>
    <a href="#road-transport-form-anchor" class="rev-button" style="margin-top: 3rem;">Contact Us</a>
</section>
<section class="site-width home-hero-slider-section">
    <div class="home-glide hp-slider">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <?php 
                    // Start WP Query
                    while ($home_posts -> have_posts()) : $home_posts -> the_post(); 
                    // Display the Project Title and Client with Hyperlink
                ?>
                <li class="glide__slide">
                    <?php include('template-parts/project-card.php'); ?>
                </li>
                <?php 
                    // Repeat the process and reset once it hits the limit
                    endwhile;
                    wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
    
    <!-- GlideJS script -->
    <script>
        var glide = new Glide('.home-glide', {
            type: 'carousel',
            perView: 3,
            perTouch: 4,
            focusAt: 0,
            gap: 20,
            autoplay: 8000,
            animationDuration: 150,
            peek: 150,
            slideWidth: 277,
            breakpoints: {
                1600: { // Breakpoint at <1600px
                    perView: 2,
                    peek: 100
                },
                1309: {
                    perView: 2,
                    peek: 40
                },
                1150: {
                    perView: 2,
                    peek: 25
                },
                800: {
                    perView: 1,
                    peek: 25
                },
                500: {
                    perView: 1,
                    peek: 15
                },
            }
        }).mount()
    </script>

</section>

<section class="site-width services-hero-section" style="position: relative;">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-3.svg'; ?>" style="height: 35rem; left: 60%; top: -280px; transform: rotate(345deg);">
    <h2 style="max-width: 32ch;">
        <span class="grad-text">Our services</span> build brands that connect with consumers and  <span class="grad-text">drives growth</span> 🚀
    </h2>
    <a href="#road-transport-form-anchor" class="rev-button" style="margin-top: 3rem;">Contact Us</a>
</section>

<section class="site-width services-block" style="position: relative;">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/small-grid.svg'; ?>" style="height: 18rem; left: -2%; top: -4%;">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/large-grid.svg'; ?>" style="height: 35rem; left: -2%; top: 30%;">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-4.svg'; ?>" style="height: 40rem; right: -10%; top: 55%;">
    <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/small-grid.svg'; ?>" style="height: 18rem; right: 30%; bottom: 2%;">
    <div class="rev-card rev-padding">
        <div class="service-img development-service"></div>
        <div class="service-text">
            <div class="flex-wrap">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/web-dev-icon.svg'; ?>" alt="Development">
                <h3 style="margin-right: auto; margin-left: 2rem;">Web design and development</h3>
            </div>
            <p>We build first class Wordpress and Shopify sites for a wide range of clients and industries. <a href="/work?web-development">View web development projects.</a></p>
            <ul style="margin-left: .7rem; line-height: 2.5rem; display: flex; flex-wrap: wrap;">
                <div style="margin-right: 2.5rem">
                    <li class="rev-bullet"><span>Wordpress development</span></li>
                    <li class="rev-bullet"><span>Shopify development</span></li>
                </div>
                <div>
                    <li class="rev-bullet"><span>Fully interactive prototypes</span></li>
                    <li class="rev-bullet"><span>Totally responsive</span></li>
                </div>
            </ul>
        </div>
    </div>
    <div class="rev-card rev-padding">
        <div class="service-img social-service"></div>
        <div class="service-text">
            <div class="flex-wrap">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/social-icon.svg'; ?>" alt="Social">
                <h3 style="margin-right: auto; margin-left: 2rem;">Social media marketing</h3>
            </div>
            <p>Cut to the chase with our social media services, connecting consumers to the heart of your brand. <a href="/work?social-media">View social media projects.</a></p>
            <ul style="margin-left: .7rem; line-height: 2.5rem; display: flex; flex-wrap: wrap;">
                <div style="margin-right: 2.5rem">
                    <li class="rev-bullet"><span>Engaging feed content</span></li>
                    <li class="rev-bullet"><span>Targeted ads and PPC</span></li>
                </div>
                <div>
                    <li class="rev-bullet"><span>Expert social strategy</span></li>
                    <li class="rev-bullet"><span>Engagement is our bread and butter</span></li>
                </div>
            </ul>
        </div>
    </div>
    <div class="rev-card rev-padding">
        <div class="service-img design-service"></div>
        <div class="service-text">
            <div class="flex-wrap">
                <img loading="lazy" style="transform: scale(0.7);" src="<?php echo get_template_directory_uri() . '/assets/imgs/print-icon.svg'; ?>" alt="Print">
                <h3 class="h3-line-end" style="margin-right: auto; margin-left: 2rem;">Print and digital design</h3>
            </div>
            <p>Good design is our foundation, be it digital or print. <a href="/work?design">View print design projects.</a></p>
            <ul style="margin-left: .7rem; line-height: 2.5rem; display: flex; flex-wrap: wrap;">
                <div style="margin-right: 2.5rem">
                    <li class="rev-bullet"><span>Brochures, posters and flyers</span></li>
                    <li class="rev-bullet"><span>Digital graphics and artwork</span></li>
                </div>
                <div>
                    <li class="rev-bullet"><span>Signage and banners</span></li>
                    <li class="rev-bullet"><span>Digital billboards</span></li>
                </div>
            </ul>
        </div>
    </div>
    <div class="rev-card rev-padding">
        <div class="service-img build-service"></div>
        <div class="service-text">
            <div class="flex-wrap">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/brand-build-icon.svg'; ?>" alt="Brand">
                <h3 style="margin-right: auto; margin-left: 2rem;">Brand building</h3>
            </div>
            <p>We know a business's identity starts with their brand. <a href="/work?brand-building">View brand projects.</a></p>
            <ul style="margin-left: .7rem; line-height: 2.5rem; display: flex; flex-wrap: wrap;">
                <div style="margin-right: 2.5rem">
                    <li class="rev-bullet"><span>Powerful brand systems</span></li>
                    <li class="rev-bullet"><span>Written digital and print copy</span></li>
                </div>
                <div>
                    <li class="rev-bullet"><span>Pixel-perfect logos</span></li>
                    <li class="rev-bullet"><span>Commercial goal-setting</span></li>
                </div>
            </ul>
        </div>
    </div>
    <div class="rev-card rev-padding">
        <div class="service-img copywriting-service"></div>
        <div class="service-text">
            <div class="flex-wrap">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/copywriting-icon.svg'; ?>" alt="Copywriting">
                <h3 style="margin-right: auto; margin-left: 2rem;">Brand voice and copywriting</h3>
            </div>
            <p>Establishing a unique voice in your industry is challenging, let us help. <a href="/work?copywriting">View copywriting projects.</a></p>
            <ul style="margin-left: .7rem; line-height: 2.5rem; display: flex; flex-wrap: wrap;">
                <div style="margin-right: 2.5rem">
                    <li class="rev-bullet"><span>Brand voice and copywriting</span></li>
                    <li class="rev-bullet"><span>Press-releases</span></li>
                </div>
                <div>
                    <li class="rev-bullet"><span>Proof reading and editing</span></li>
                </div>
            </ul>
        </div>
    </div>
    <div class="rev-card rev-padding">
        <div class="service-img security-service"></div>
        <div class="service-text">
            <div class="flex-wrap">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/security-icon.svg'; ?>" alt="Security">
                <h3 class="h3-line-end" style="margin-right: auto; margin-left: 2rem;">Maintenance and security</h3>
            </div>
            <p>A website is never finished, only improved. <!--<a href="/work">View projects.</a>--></p>
            <ul style="margin-left: .7rem; line-height: 2.5rem; display: flex; flex-wrap: wrap;">
                <div style="margin-right: 2.5rem">
                    <li class="rev-bullet"><span>Complete site and database backups</span></li>
                    <li class="rev-bullet"><span>Website monitoring</span></li>
                </div>
                <div>
                    <li class="rev-bullet"><span>Theme, plugin and software updates</span></li>
                    <li class="rev-bullet"><span>Flexible plans tailored to client requirements</span></li>
                </div>
            </ul>
        </div>
    </div>
</section>

<section class="site-width our-tools-section">
    <div class="tools-container">
        <div class="tools-top">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/tools-top-l-mob.png'; ?>" alt="">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/tools-top-r-mob.png'; ?>" alt="">
        </div>
        <img loading="lazy" class="tools-left" src="<?php echo get_template_directory_uri() . '/assets/imgs/tools-left-dt.png'; ?>" alt="">
        <div class="rev-card rev-padding our-tools-card" style="position: relative;">
            <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-1.svg'; ?>" style="height: 38rem; left: -29%; top: -126px; transform: rotate(17deg);">
            <img loading="lazy" class="rev-decore" alt="" src="<?php echo get_template_directory_uri() . '/assets/imgs/blob-3.svg'; ?>" style="height: 25rem; right: -14%; top: 63%; transform: rotate(215deg);">
            <h1>Our tools 🛠️</h1>
            <p>We use a suite of modern tools to help put our clients on the map and keep them there.</p>
            <a href="#road-transport-form-anchor" style="z-index: 3;" class="rev-button">Contact Us</a>
        </div>
        <div class="tools-bottom">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/tools-btm-l-mob.png'; ?>" alt="">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/imgs/tools-btm-r-mob.png'; ?>" alt="">
        </div>
        <img loading="lazy" class="tools-right" src="<?php echo get_template_directory_uri() . '/assets/imgs/tools-right-dt.png'; ?>" alt="">
    </div>
</section>

<div class="transport-form-footer" id="road-transport-form-anchor">
    <?php get_template_part('template-parts/contact-form'); ?>
</div>


<?php get_footer(); ?>