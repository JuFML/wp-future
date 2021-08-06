<!-- Sidebar -->
<section id="sidebar">

    <!-- Intro -->
    <section id="intro">
        <a href="<?php echo home_url('/'); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="" /></a>
        <header>
            
            <h2><?php echo bloginfo( 'name' ) ?></h2>
            <p><?php echo bloginfo('description') ?></a></p>
        </header>
    </section>

    <!-- Mini Posts -->
    <section>
        <div class="mini-posts">

            <?php 
                $WP_query = new WP_query('posts');
                if($WP_query->have_posts()) : while($WP_query->have_posts()) : $WP_query->the_post();
            ?>

            <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <time class="published" datetime="2015-11-01"><?php the_date('F j, Y'); ?></time>
                        <a href="<?php get_author_posts_url( get_the_author_meta( 'ID' )); ?>" class="author"><img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' )); ?>" alt="" /></a>
                    </header>
                    <a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail('sidebar-big'); ?></a>
                </article>
            <?php endwhile; endif; wp_reset_postdata(); ?>
           
        </div>
    </section>

    <!-- Posts List -->
    <section>
        <ul class="posts">

        <?php 
                $WP_query = new WP_query('posts');
                if($WP_query->have_posts()) : while($WP_query->have_posts()) : $WP_query->the_post();
        ?>

            <li>
                <article>
                    <header>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <time class="published" datetime="2015-11-01"><?php the_date('F j, Y'); ?></time>
                    </header>
                    <a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail('sidebar-thumb'); ?></a>
                </article>
            </li>

        <?php endwhile; endif; wp_reset_postdata(); ?>
        </ul>
    </section>

    <!-- About -->
    <section class="blurb">
        <h2>About</h2>
        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
        <ul class="actions">
            <li><a href="#" class="button">Learn More</a></li>
        </ul>
    </section>

		<!-- Footer -->
	<section id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
    </section>

</section>	