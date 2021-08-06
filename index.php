<?php get_header(); ?>

		<!-- Main -->
			<div id="main">
			
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
						<a href="<?php the_permalink(); ?>" class="image featured"><?php the_post_thumbnail('full'); ?></a>
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
						<li><?php next_posts_link('Previous Page'); ?></li>
						<li><?php previous_posts_link('Next Page'); ?></li>
					</ul>

			</div>

			<?php get_sidebar(); ?>


	</div>

<?php get_footer(); ?>