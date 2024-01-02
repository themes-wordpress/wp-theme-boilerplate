<?php get_header();?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ;?>);"></div>
    <?php $variable = 'Some value'; ?>
    <?php get_template_part('archive-banner'); ?>
</div>
<div class="container container--narrow page-section">
  <?php if(have_posts()) { while(have_posts()) {the_post(); ?>
      <div class="post-item">
         <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink();?>"><?php the_title() ?></a></h2>
         <div class="metabox">
            <p>Posted by <?php the_author_posts_link(); ?> on  <?php the_time('D, M d Y @ h:m:s')?> in <?php echo get_the_category_list(', ') ?></p>
         </div>
         <div class="generic-content">
            <?php the_excerpt();?>
            <p><a href="<?php the_permalink();?>" class="btn btn--blue">Continue reading &raquo;</a></p>
         </div>
      </div>
  <?php }} echo paginate_links()  ?>
</div>
<?php get_footer(); ?>