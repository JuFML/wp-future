<?php get_header(); ?>

				<!-- Main -->
					<div id="main">
                        <?php var_dump( have_posts() ); ?>

                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    
                    	<!-- Post -->
                        <article class="post">
								<header>
									<div class="title">
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<?php the_excerpt(); ?>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01"><?php the_date('F j, Y'); ?></time>
										<a href="<?php get_author_posts_url( get_the_author_meta( 'ID' )); ?>" class="author"><span class="name"><?php the_author(); ?></span><img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' )); ?>" alt="" /></a>
									</div>
								</header>
								<a href="<?php the_permalink(); ?>" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
								<?php the_content(); ?>
								<footer>
									<ul class="actions">
										<li><a href="<?php the_permalink(); ?>" class="button large">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><?php the_category(', '); ?></li>
										<li><a href="#" class="icon solid fa-comment"><?php comments_number(); ?></a></li>
									</ul>
								</footer>
							</article>

                    <?php endwhile; endif; ?>
                 

						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button large previous">Previous Page</a></li>
								<li><a href="#" class="button large next">Next Page</a></li>
							</ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="" /></a>
								<header>
									<h2>Future Imperfect</h2>
									<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
								</header>
							</section>

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.html">Vitae sed condimentum</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
												<a href="#" class="author"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.jpg" alt="" /></a>
											</header>
											<a href="single.html" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic04.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.html">Rutrum neque accumsan</a></h3>
												<time class="published" datetime="2015-10-19">October 19, 2015</time>
												<a href="#" class="author"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.jpg" alt="" /></a>
											</header>
											<a href="single.html" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic05.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.html">Odio congue mattis</a></h3>
												<time class="published" datetime="2015-10-18">October 18, 2015</time>
												<a href="#" class="author"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.jpg" alt="" /></a>
											</header>
											<a href="single.html" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic06.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.html">Enim nisl veroeros</a></h3>
												<time class="published" datetime="2015-10-17">October 17, 2015</time>
												<a href="#" class="author"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.jpg" alt="" /></a>
											</header>
											<a href="single.html" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic07.jpg" alt="" /></a>
										</article>

								</div>
							</section>

						<!-- Posts List -->
							<section>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><a href="single.html">Lorem ipsum fermentum ut nisl vitae</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic08.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Convallis maximus nisl mattis nunc id lorem</a></h3>
												<time class="published" datetime="2015-10-15">October 15, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic09.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Euismod amet placerat vivamus porttitor</a></h3>
												<time class="published" datetime="2015-10-10">October 10, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic10.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Magna enim accumsan tortor cursus ultricies</a></h3>
												<time class="published" datetime="2015-10-08">October 8, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic11.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Congue ullam corper lorem ipsum dolor</a></h3>
												<time class="published" datetime="2015-10-06">October 7, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic12.jpg" alt="" /></a>
										</article>
									</li>
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

			</div>

<?php get_footer(); ?>