<?php get_header(); ?>

    <main>
    <h1>Latest Articles</h1>
    <ul id=lists class="blog-wrapper">
      <?php if (have_posts()): ?>
			<?php while (have_posts()): the_post(); ?>
      <li id="post-<?php the_ID(); ?>" class="blog-inner">
        <a href="<?php the_permalink(); //詳細へのリンク ?>">
							<?php the_post_thumbnail('medium'); ?>		
							</a>
        <div class="blog-text">
          <p><?php the_time('Y / m / d /'); ?></p>
          <p><a href="<?php the_permalink(); //詳細へのリンク ?>"><?php the_title(); ?></a></p>
          <div class="read-wrapper">
            <p><a href="<?php the_permalink(); //詳細へのリンク ?>">READ MORE</a></p>
            <span class="read-border"></span>
          </div>
        </div>
      </li>
      <?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
    </ul>

    <?php if($paged < $lists->max_num_pages) {?>
    <div class="more-wrapper moreread" id="next">
      <p>
      <a href="<?php echo next_posts($lists->max_num_pages, false); ?>">もっと見る</a>
      </p><i class="fas fa-chevron-right"></i>
      <img id="loading" src="<?php echo get_template_directory_uri() ?>/loading.gif" alt="読み込み中"  width="29" height="29">
    </div>
    <?php }?>




  </main>


<?php get_footer(); ?>
